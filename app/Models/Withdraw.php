<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    /*
        status : 0 = Pending, 1 = Processing, 2 = Successful, 3 = Failed 
    */

    protected $fillable = [
        'user_id','previous_balance', 'withdraw_amount', 'left_of_balance', 'status', 'rejected_reason','transaction_type','transaction_via','transaction_id',
    ];

    static function createWithdraw($data)
    {
        return Withdraw::create([
            'user_id' => $data['user_id'],
            'previous_balance' => $data['previous_balance'],
            'withdraw_amount' => $data['withdraw_amount'],
            'left_of_balance' => $data['left_of_balance'],
            'rejected_reason' => isset($data['rejected_reason'])?$data['rejected_reason']:null,
            'status' => isset($data['status'])?$data['status']:0,
            'transaction_id' => isset($data['transaction_id'])?$data['transaction_id']:null,
            'transaction_type' => isset($data['transaction_type'])?$data['transaction_type']:null,
            'transaction_via' => isset($data['transaction_via'])?$data['transaction_via']:null,
        ]);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
