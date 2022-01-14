<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'user_id', 'visitor_id'
    ];

    public function visitor()
    {
        return $this->belongsTo('App\Models\User');
    }
}
