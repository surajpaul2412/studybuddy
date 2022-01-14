<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'user_id','following_id','is_friend','is_blocked'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function follower_list()
    {
        return $this->belongsTo('App\Models\User','following_id');
    }
}
