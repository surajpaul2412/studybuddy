<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StripeConnect extends Controller
{

    public function createConnectLink(int $id)
    {
        $user = User::findOrFail($id);
        // Check stripe account exist or not
        if (!$user->stripe_acc_id) {

            // Create Stripe Account
            $account = set_stripe_client()->accounts->create([
                'country' => 'US',
                'type' => 'express',
                'email' => $user->email,
            ]);

            // Update stripe account id in user table
            $user->stripe_acc_id = $account->id;
            $user->save();
            $user->fresh();
        }

        // Check user stripe account onboarding complete or not
        if (!$user->account_onboarding_complete) {
            $token = Str::random(140);
            DB::table('stripe_state_token')->insert([
                'token' => $token,
                'user_id' => $user->id
            ]);
            // generate onboard link
            $onboardLink = set_stripe_client()->accountLinks->create([
                'account' => $user->stripe_acc_id,
                'refresh_url' => route('stripe.redirect', ['id' => $user->id]),
                'return_url' => route('stripe.save', ['token' => $token]),
                'type' => 'account_onboarding',
            ]);
            return redirect($onboardLink->url);
        }

        $loginLink = set_stripe_client()->accounts->createLoginLink($user->stripe_acc_id);
        return redirect($loginLink->url);
    }


    public function saveStripeAccount($token)
    {
        $stripe_state_token = DB::table('stripe_state_token')->where('token', $token)->first();

        if(!$stripe_state_token){
            abort(404);
        }

        $user = User::findOrFail($stripe_state_token->user_id);
        $user->account_onboarding_complete = true;
        $user->save();

        DB::table('stripe_state_token')->where('token', $token)->delete();

        return redirect()->route('stripe.redirect', ['id' => $user->id]);
    }
}
