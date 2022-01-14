<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCommentReply extends Model
{
	protected $fillable = [
        'post_comment_id','user_id','reply'
    ];

    public function postComment()
    {
        return $this->belongsTo('App\Models\PostComment')->orderBy('created_at','asc');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
