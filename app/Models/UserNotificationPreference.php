<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserNotificationPreference extends Model
{
    protected $fillable = [
        'user_id','session_reminder','chatbox','posts','mentions','followups'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
