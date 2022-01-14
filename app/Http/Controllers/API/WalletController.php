<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use App\Models\WalletTransaction;
use Validator;
use Auth;
use DB;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $user = Auth::user();
        $transactions = WalletTransaction::whereUserId($user->id)->with('session.tutor','session.author')->orderBy('created_at', 'desc')->paginate(20);
        return $this->sendResponse($transactions,"Successful.");
    }

    /**
     * Add amount of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $req)
    {
        $user = Auth::user();
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
        if (!isset($user->defaultCard)) {
            return $this->sendError("Please add card first!","Failure.");
        }
        $currentAmount = (float)$req->amount;
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
                'type' => 1,
            ];
            $result = WalletTransaction::addAmount($data);
            return $this->sendResponse($result,"Successful.");
        }
        $error = $checkPayment['message']??"Something went wrong!";
        return $this->sendError($error,"Failure.");
    }
}
