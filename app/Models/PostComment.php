<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $fillable = [
        'post_id','user_id','comment'
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Post')->orderBy('created_at','asc');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function replies()
    {
        return $this->hasMany('App\Models\PostCommentReply')->orderBy('created_at','asc');
    }
}
