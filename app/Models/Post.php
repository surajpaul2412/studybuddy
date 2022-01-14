<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
        'user_id','university_id','content','status'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\PostLike');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\PostComment')->orderBy('created_at','asc');
    }

    public function location()
    {
        return $this->hasOne('App\Models\PostLocation');
    }

    public function media()
    {
        return $this->hasMany('App\Models\PostMedia')->orderBy('created_at','asc');
    }

    public function mentions()
    {
        return $this->hasMany('App\Models\PostMention')->orderBy('created_at','asc');
    }

    public function joins()
    {
        return $this->hasMany('App\Models\PostJoin');
    }

    public function postFavourites()
    {
        return $this->hasMany('App\Models\postFavourite');
    }

    public function notification()
    {
        return $this->belongsTo('App\Models\Notification');
    }
}
