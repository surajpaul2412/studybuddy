<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use Validator;
use Auth;
use DB;

class WithdrawController extends Controller
{   
    public function __construct()
    {
        $this->middleware('CheckTutor');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {   
        $user = Auth::user();
        $transactions = Withdraw::where('user_id',$user->id)->paginate(20);
        return $this->sendResponse($transactions,"Successful.");
    }

    /**
     * Add amount of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function request(Request $req){
        $user = Auth::user();
        if($user->stripe_acc_id == null){
            return $this->sendError("Fill your Bank details first!","Failure.");
        }
        $validator = Validator::make($req->all(),[
            'amount'=> "required|numeric|min:1",
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 403);
        }

        $walletBal = $user->wallet_balance??0;
        if ($walletBal < $req->amount) {
            return $this->sendError("You haven't suffeciant funds !","Failure.");
        }
        if ($user->withdrawRequests()->whereIn('status',[0,1])->count() > 0) {
            return $this->sendError("Already a withdraw request is pending!","Failure.");
        }
        $currentAmount = (float)$req->amount;
        // Transfer amount to connect
        $checkTransfer = confirmTransfer($user,$currentAmount);
        if($checkTransfer){
            $checkPayout = confirmPayout($user,$currentAmount);
        }

        $data = [
            'user_id' => $user->id,
            'previous_balance' => $walletBal,
            'withdraw_amount' => $currentAmount,
            'left_of_balance' => $walletBal-$currentAmount,
            'transaction_id' => $checkPayout['data']['id']??null,
            'transaction_type' => $checkPayout['data']['type']??null,
            'transaction_via' => $checkPayout['data']['source_type']??null,
        ];
        $result = Withdraw::createWithdraw($data);
        return $this->sendResponse($result,"Successful.");
    }
}
