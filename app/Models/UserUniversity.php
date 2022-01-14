<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserUniversity extends Model
{
    protected $fillable = [
        'user_id','university_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function university()
    {
    	return $this->belongsTo('App\Models\User', 'university_id');
    }
}
