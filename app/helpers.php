<?php
use App\Models\User;
use App\Models\Withdraw;
use App\Models\Follow;
use App\Models\Session;
use App\Models\WalletTransaction;
use Carbon\Carbon;

/*User*/
function getUserDetails($user)
{
	$res = User::whereId($user->id)->with('role', 'tutorDetail', 'subjects.subject', 'studentDetail.nativeLanguage', 'studentDetail.secondaryLanguage', 'studentDetail.secondaryLanguageLevel', 'studentDetail.college','university.university', 'tutorDetail.nativeLanguage', 'tutorDetail.secondaryLanguage', 'tutorDetail.secondaryLanguageLevel','reviews.user','reviews.reviewer','reviews.session','visitors.visitor')->first();
	$followers = Follow::whereFollowingId($user->id)->whereIsFriend(1)->whereIsBlocked(0)->count();
	$following = Follow::whereUserId($user->id)->whereIsBlocked(0)->count();
	$res['followers'] = $followers;
	$res['following'] = $following;

	if($user->role->slug == 'tutor'){
		$res['lessons'] = Session::whereTutorId($user->id)->whereStatus(3)->count();
		$hour = Session::whereTutorId($user->id)->whereStatus(3)->get();
			$minuteCount = array();
			foreach ($hour as $key => $value) {
				$start  = new Carbon($value->start_date_time);	
				$end    = new Carbon($value->end_date_time);
				$minuteCount[] = $start->diffInMinutes($end);
			}
			$hourCount = array_sum($minuteCount);
			$hourCount = intdiv($hourCount, 60);
		$res['hour'] = $hourCount;
		$res['student'] = Session::whereCreatedBy($user->id)->whereStatus(3)->distinct('created_by')->count();
	}else{ // Student Role
		$hour = Session::whereTutorId($user->id)->whereStatus(3)->get();
			$minuteCount = array();
			foreach ($hour as $key => $value) {
				$start  = new Carbon($value->start_date_time);	
				$end    = new Carbon($value->end_date_time);
				$minuteCount[] = $start->diffInMinutes($end);
			}
			$hourCount = array_sum($minuteCount);
			$hourCount = intdiv($hourCount, 60);
		$res['hour'] = $hourCount;
		$res['lessons'] = Session::whereCreatedBy($user->id)->whereStatus(3)->count();
	}
	
	return $res;
}

/* Stripe */
function set_stripe() {
	return \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
}

function set_stripe_client(){
    return new \Stripe\StripeClient(
      config('services.stripe.secret')
    );
}

function customer_id($user) {
	if ($user->stripe_cust_id != null) {
		return $user->stripe_cust_id;
	} else {
		try {
			$stripe = set_stripe();
			$customer = \Stripe\Customer::create([
				'description' => "Name:$user->name user_id=" . $user->id,
				'name' => $user->name,
				'phone' => $user->phone,
				'email' => $user->email ?? '',
			]);
			User::where('id', $user->id)->update(['stripe_cust_id' => $customer['id']]);
			return $customer['id'];
		} catch (\Exception $e) {
			return $e;
		}
	}
}

function customer_connect_id($user) {
	if ($user->stripe_acc_id != null) {
		return $user->stripe_acc_id;
	} else {
		return $res = [
			'status' => false,
			'message' => "Go setup your connect account first!",
		];
	}
}

function addCustomerCard($user,$token) {	
	$card = null;
	try {
		$customer_id = customer_id($user);
        set_stripe();
        $customer = \Stripe\Customer::retrieve($customer_id);
        $card = $customer->createSource($customer_id,["source" => $token]);
	} catch (\Exception $e) {
		
	}
	return $card;
}

function removeCustomerCard($user,$cardId) {	
	$card = null;
	try {
		$customer_id = customer_id($user);
        set_stripe();
        $customer = \Stripe\Customer::retrieve($customer_id);
        $card = $customer->deleteSource($customer_id,$cardId,[]);
	} catch (\Exception $e) {
		
	}
	return $card;
}

function createPaymentIntent($user, $amount) {
	$res = [
		'status' => false,
		'message' => "Something went wrong!",
	];

	try {
		set_stripe();
		$stripe = set_stripe_client(); 
		$custId = customer_id($user);
		$intent = \Stripe\PaymentIntent::create([
			'amount' => $amount,
			'currency' => 'usd',
			'customer' => $custId,
			'payment_method_types' => ['card'],
			'payment_method' => $user->defaultCard->card_id??"",
		]);
		$res = [
			'status' => true,
			'data' => $intent,
			'message' => 'Successful!',
		];
	} catch (\Exception $e) {
		$res['message'] = $e->getMessage();
		// dd($e->getMessage());
	}
	return $res;
}

function confirmWalletAddOn($user,$amount) {
	$res = [
		'status' => false,
		'message' => "Something went wrong!",
	];
	$totalAmount = $amount * 100;
	try {
		if ($totalAmount > 0) {
			$intentRes = createPaymentIntent($user, $totalAmount);
			if ($intentRes['status'] && isset($intentRes['data']['id'])) {
				$stripe = set_stripe_client();
				$payment = $stripe->paymentIntents->confirm(
					$intentRes['data']['id'],
					['payment_method' => 'pm_card_visa']
				);
				if (isset($payment['id'])) {
					$res = [
						'status' => true,
						'data' => $payment,
						'message' => __('api.payment_successful'),
					];
				}
			} elseif (isset($intentRes['message'])) {
				$res['message'] = $intentRes['message'];
			}
		}
	} catch (\Exception $e) {
		$res['message'] = $e->getMessage();
		// dd($e->getMessage());
	}
	return $res;
}

function pay($session, $user){
	$res = [
		'status' => false,
		'message' => "Something went wrong!",
	];
	try {
	    if (!isset($user->defaultCard)) {
	        return $this->sendError("Please add card first!","Failure.");
	    }
	    $currentAmount = (float)$session->income;
	    $checkPayment = confirmWalletAddOn($user,$currentAmount);
	    if ($checkPayment['status'] == true && isset($checkPayment['data']->id)) {
	        $lastTransaction = WalletTransaction::where('user_id',$user->id)->latest()->first();
	        $prevAmount = $lastTransaction->balance_amount??0;
	        $data = [
	            'user_id' => $user->id,
	            'transaction_id' => $checkPayment['data']->id,
	            'prev_amount' => $prevAmount,
	            'current_amount' => $currentAmount,
	            'balance_amount' => $prevAmount - $currentAmount,
	            'type' => 0,
	            'session_id' => $session->id,
	        ];
	        $result = WalletTransaction::addAmount($data);
	        return $res;
	    }
	} catch (\Exception $e) {
		$res['message'] = $e->getMessage();
	}
	return $res;
}

function addIncome($session, $user){
	$res = [
		'status' => false,
		'message' => "Something went wrong!",
	];
	try {
		if (!isset($user->defaultCard)) {
			$error = "Please add card first!";
	        $res['message'] = $error;
	    }
	    $currentAmount = (float)$session->income;
	    if($session->extention_count != 0){
	    	$currentAmount = (float)(($session->income )* ($session->extention_count+1));
	    }
	    $checkPayment = confirmWalletAddOn($user,$currentAmount);
	    if ($checkPayment['status'] == true && isset($checkPayment['data']->id)) {
	        $lastTransaction = WalletTransaction::where('user_id',$user->id)->latest()->first();
	        $prevAmount = $lastTransaction->balance_amount??0;
	        $data = [
	            'user_id' => $user->id,
	            'transaction_id' => $checkPayment['data']->id,
	            'prev_amount' => $prevAmount,
	            'current_amount' => $currentAmount,
	            'balance_amount' => $prevAmount + $currentAmount,
	            'session_id' => $session->id,
	            'type' => 1,
	        ];
	        $result = WalletTransaction::addAmount($data);
	        return $res;
	    }
	    $error = $checkPayment['message']??"Something went wrong!";
    	$res['message'] = $error;
	} catch (\Exception $e) {
		$res['message'] = $e->getMessage();
	}
	return $res;
}







// Transfer
function createTransferIntent($user, $amount) {
	$res = [
		'status' => false,
		'message' => "Something went wrong!",
	];
	try {
		set_stripe();
		$stripe = set_stripe_client(); 
		$accId = customer_connect_id($user);
		$intent = $stripe->transfers->create([
		  'amount' => $amount,
		  'currency' => 'usd',
		  'destination' => $accId,
		  'transfer_group' => 'ORDER_95',
		]);
		$res = [
			'status' => true,
			'data' => $intent,
			'message' => 'Successful!',
		];
	} catch (\Exception $e) {
		$res['message'] = $e->getMessage();
	}
	return $res;
}

function confirmTransfer($user,$amount) {
	$res = [
		'status' => false,
		'message' => "Something went wrong!",
	];
	$totalAmount = $amount * 100;
	try {
		if ($totalAmount > 0) {
			$intentRes = createTransferIntent($user, $totalAmount);
			if ($intentRes['status'] && isset($intentRes['data']['id'])) {
				$stripe = set_stripe_client();

				$transfer = $stripe->transfers->retrieve(
				  $intentRes['data']['id']
				);
				if (isset($transfer['id'])) {
					$res = [
						'status' => true,
						'data' => $transfer,
						'message' => __('api.transfer_successful'),
					];
				}
			} elseif (isset($intentRes['message'])) {
				$res['message'] = $intentRes['message'];
			}
		}
	} catch (\Exception $e) {
		$res['message'] = $e->getMessage();
	}
	return $res;
}

// Payout
function createPayoutIntent($user, $amount) {
	$res = [
		'status' => false,
		'message' => "Something went wrong!",
	];
	try {
		set_stripe();
		$stripe = set_stripe_client(); 
		$accId = customer_connect_id($user);
		$intent = $stripe->payouts->create([
		  'amount' => $amount,
		  'currency' => 'usd'
		],['stripe_account'=>$accId]);
		$res = [
			'status' => true,
			'data' => $intent,
			'message' => 'Successful!',
		];
	} catch (\Exception $e) {
		$res['message'] = $e->getMessage();
	}
	return $res;
}

function confirmPayout($user,$amount) {
	$res = [
		'status' => false,
		'message' => "Something went wrong!",
	];
	$totalAmount = $amount * 100;
	try {
		if ($totalAmount > 0) {
			$intentRes = createPayoutIntent($user, $totalAmount);
			if ($intentRes['status'] && isset($intentRes['data']['id'])) {
				$stripe = set_stripe_client();
				$accId = customer_connect_id($user);
				$withdraw = $stripe->payouts->retrieve(
				  $intentRes['data']['id'],[],['stripe_account'=>$accId]
				);
				if (isset($withdraw['id'])) {
					$res = [
						'status' => true,
						'data' => $withdraw,
						'message' => __('api.withdraw_request_successful'),
					];
				}
			} elseif (isset($intentRes['message'])) {
				$res['message'] = $intentRes['message'];
			}
		}
	} catch (\Exception $e) {
		$res['message'] = $e->getMessage();
	}
	return $res;
}

// withdrawStatus cron
function withdrawStatus($withdraw){
	$res = [
		'status' => false,
		'message' => "Something went wrong!",
	];
	$user = User::findOrfail($withdraw->user_id);
	try {
		$stripe = set_stripe_client();
		$accId = customer_connect_id($user);
		$payout = $stripe->payouts->retrieve(
		  $withdraw->transaction_id,[],['stripe_account'=>$accId]
		);
		
		if (isset($payout['id'])) {
			if($payout['status'] == "paid"){
				Withdraw::whereUserId($user->id)->whereTransactionId($payout->id)->update(['status'=>2]);
				// Transaction entry
				$data = [
		            'user_id' => $user->id,
		            'transaction_id' => $payout->id,
		            'prev_amount' => $user->wallet_balance,
		            'current_amount' => $withdraw->withdraw_amount,
		            'balance_amount' => $user->wallet_balance-$withdraw->withdraw_amount,
		            'type' => 0,
		        ];
		        $result = WalletTransaction::addAmount($data);
			}
		}
	} catch (\Exception $e) {
		$res['message'] = $e->getMessage();
	}
	return $res;
}