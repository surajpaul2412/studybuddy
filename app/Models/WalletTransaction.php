<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{   
    /*
        type : 0=>debit,1=>credit
    */

    protected $fillable = [
        'user_id','transaction_id','prev_amount','current_amount','balance_amount','type','session_id'
    ];

    static function addAmount($data)
    {
        return WalletTransaction::create([
            'user_id' => $data['user_id'],
            'transaction_id' => $data['transaction_id'],
            'prev_amount' => $data['prev_amount'],
            'current_amount' => $data['current_amount'],
            'balance_amount' => $data['balance_amount'],
            'type' => $data['type'],
            'session_id' => $data['session_id']??null,
        ]);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function session()
    {
        return $this->belongsTo('App\Models\Session');
    }
}
