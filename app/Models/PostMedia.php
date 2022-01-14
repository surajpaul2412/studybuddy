<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostMedia extends Model
{
    protected $fillable = [
        'post_id','media'
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
