<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SessionAttendance extends Model
{
    protected $fillable = [
        'session_id','user_id'
    ];

    public function session()
    {
        return $this->belongsTo('App\Models\Session','session_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
