<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id','reviewer_id','session_id','star','review'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function reviewer()
    {
        return $this->belongsTo('App\Models\User','reviewer_id');
    }

    public function session()
    {
        return $this->belongsTo('App\Models\Session');
    }
}
