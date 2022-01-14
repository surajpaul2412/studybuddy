<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use App\Models\Card;
use Validator;
use Auth;
use DB;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {   
        $user = Auth::user();
        $transactions = Card::where('user_id',$user->id)->paginate(20);
        return $this->sendResponse($transactions,"Successful.");
    }

    /**
     * Add amount of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $req)
    {   
        $validator = Validator::make($req->all(),[
            'token'=> "required|string",
            'holder_name'=> "required|string|max:255",
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 403);
        }
        $user = Auth::user();
        $cardDetails = addCustomerCard($user,$req->token);
        if (isset($cardDetails)) {
            $data = [
                'holder_name' => $req->holder_name,
                'user_id' => $user->id,
                'card_id' => $cardDetails['id'],
                'last_four' => $cardDetails['last4'],
                'brand' => $cardDetails['brand'],
                'is_default' => 1,
            ];
            Card::where('user_id',$user->id)->update(['is_default'=>0]);
            $card = Card::where('user_id',$user->id)
                    ->where('last_four',$cardDetails['last4'])
                    ->where('brand',$cardDetails['brand'])
                    ->first();
            $result = Card::createOrUpdateCard($data,$card);
            return $this->sendResponse($result,"Successful.");
        }
        $error = "Invalid card details!";
        return $this->sendError($error,"Failure.");
    }

    /**
     * Add amount of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $req)
    {   
        $user = Auth::user();
        $validator = Validator::make($req->all(),[
            'id'=> "required|exists:cards,id,user_id,".$user->id,
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 403);
        }
        $card = $user->cards()->find($req->id);
        $cardRemove = removeCustomerCard($user,$card->card_id);
        if (isset($cardRemove)) {
            if($card->is_default == 1 && $user->cards()->count() > 1){
                $user->cards()->where('id','!=',$card->id)->latest()->first()->update(['is_default'=>1]);
            }
            $card->delete();
            return $this->sendResponse($card,"Successful.");
        }
        $error = "Invalid card selected!";
        return $this->sendError($error,"Failure.");
    }
}
