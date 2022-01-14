<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\carbon;
use App\Models\UserUniversity;

class Notification extends Model
{
    protected $fillable = [
        'user_id','message','is_active','session_id','post_id'
    ];

    protected function notification($session, $ref){
        if($ref == 1 && $session){ // PUBLIC_SESSION
            // tutor notify
            Notification::create(['user_id'=>$session->tutor->id,'message'=>'A new session has been organized by University.','session_id'=>$session->id,'is_active'=>1,'created_at'=>carbon::now(),'updated_at'=>carbon::now()]);
            // student notify
            $uni_members = UserUniversity::whereUniversityId($session->created_by)->get();
            foreach($uni_members as $member){
                if($member->user->role->slug == "student"){
                    Notification::create(['user_id'=>$member->user->id,'message'=>'A new session has been organized by your University. Go and show your interest','session_id'=>$session->id,'is_active'=>1,'created_at'=>carbon::now(),'updated_at'=>carbon::now()]);
                }
            }
        }
    	if($ref == 2 && $session){ // PRIVATE_SESSION
            // tutor notify
            Notification::create(['user_id'=>$session->tutor->id,'message'=>'A new session has been booked from '. $session->author->full_name .'.','session_id'=>$session->id,'is_active'=>1,'created_at'=>carbon::now(),'updated_at'=>carbon::now()]);
            // Student notify
            Notification::create(['user_id'=>$session->author->id,'message'=>'Your session has been booked successfullty with '. $session->tutor->full_name .'.','session_id'=>$session->id,'is_active'=>1,'created_at'=>carbon::now(),'updated_at'=>carbon::now()]);
        }
    }

    protected function postLikeNotification($postLike, $ref){
        if($ref == 3 && $postLike){ // POST_LIKE
            $notify = '';
            $notify = Notification::create([
                'user_id'=>$postLike->post->user_id,
                'message'=>$postLike->user->full_name .' recently like your post.',
                'post_id'=>$postLike->post_id,
                'is_active'=>1,
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()
            ]);
            return $notify;
        }
    }

    protected function postCommentNotification($add_comment, $ref){
        if($ref == 4 && $add_comment){ // POST_COMMENT
            $notify = '';
            $notify = Notification::create([
                'user_id'=>$add_comment->post->user_id,
                'message'=>$add_comment->user->full_name .' recently commented on your post.'.'"'.$add_comment->comment.'"',
                'post_id'=>$add_comment->post_id,
                'is_active'=>1,
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()
            ]);
            return $notify;
        }
    }

    protected function postCommentReplyNotification($add_comment_reply, $ref){
        if($ref == 5 && $add_comment_reply){ // POST_COMMENT
            // post owner
            $notify = '';
            $notify = Notification::create([
                'user_id'=>$add_comment_reply->postComment->post->user_id,
                'message'=>$add_comment_reply->user->full_name .' recently replied on your post related comment.'.'"'.$add_comment_reply->reply.'"',
                'post_id'=>$add_comment_reply->postComment->post_id,
                'is_active'=>1,
                'created_at'=>carbon::now(),
                'updated_at'=>carbon::now()
            ]);
            return $notify;
        }
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function session()
    {
        return $this->belongsTo('App\Models\Session');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
