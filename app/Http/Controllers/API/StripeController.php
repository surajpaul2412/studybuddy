<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Follow;
use Validator;
use Auth;
use DB;

class StripeController extends Controller
{   
    public function __construct()
    {
        $this->middleware('CheckTutor')->only([
            'tutorConnect'
        ]);
    }

    public function connect(Request $request) {
        if (isset($request->code)) {
            $token_request_body = array(
                'grant_type' => 'authorization_code',
                'code' => $request->code,
                'client_secret' => config('services.stripe.secret'),
            );
            $TOKEN_URI = "https://connect.stripe.com/oauth/token";
            $req = curl_init($TOKEN_URI);
            curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($req, CURLOPT_POST, true);
            curl_setopt($req, CURLOPT_POSTFIELDS, http_build_query($token_request_body));
            curl_setopt($req, CURLOPT_SSL_VERIFYPEER, false);
            $resp = json_decode(curl_exec($req), true);
            curl_close($req);
            if (!array_key_exists("error", $resp)) {
                return response()->json(['status' => 200, 'message' => 'Stripe account connected successfully!', 'stripe_account_id' => $resp['stripe_user_id']]);
            } else {
                \Log::info('Stripe Error');
                \Log::error($resp);
                return response()->json(['error' => $resp["error"]], 422);
            }
        }
        return response()->json(['error' => "code field is required"], 422);
    }

    public function tutorConnect(Request $req) {
        $user = Auth::user();
        $validator = Validator::make($req->all(),[
            'stripe_account_id'=> "required|string|max:255|unique:users,stripe_acc_id," . $user->id,
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 403);
        }
        $user->update([
            'stripe_acc_id' => $req->stripe_account_id
        ]);
        $user = getUserDetails($user);
        return $this->sendResponse($user,"Stripe account connected successfully!");
    }
}
