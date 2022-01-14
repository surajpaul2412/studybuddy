<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostLocation extends Model
{
    protected $fillable = [
        'post_id','latitude','longitude','address'
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
