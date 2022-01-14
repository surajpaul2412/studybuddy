<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostLike;
use App\Models\PostLocation;
use App\Models\PostMedia;
use App\Models\PostMention;
use App\Models\PostComment;
use App\Models\PostFavourite;
use App\Models\PostCommentReply;
use App\Models\Notification;
use App\Models\PostJoin;
use App\Models\User;
use Auth;
use Storage;
use Validator;
use Carbon\carbon;
use App\Services\Fcm\FcmService;

class PostController extends Controller
{
    private FcmService $fcmService;

    public function __construct(FcmService $fcmService){
        $this->fcmService = $fcmService;
    }

    public const PUBLIC_SESSION = 1;
    public const PRIVATE_SESSION = 2;
    public const POST_LIKE = 3;
    public const POST_COMMENT = 4;
    public const POST_REPLY_ON_YOUR_COMMENT = 5;

	public function allPosts()
	{
		$user = Auth::user();
		if($user){
            $posts = Post::whereUniversityId($user->university->university_id)->with('user','location','media','mentions.user','comments.user','comments.replies.user','likes.user','joins.user')->withCount('likes','comments','joins')->orderBy('created_at','desc')->paginate(20);
            
            foreach($posts as $key => $post){
                $posts[$key]['is_liked'] = PostLike::wherePostId($post->id)->whereUserId($user->id)->count();
                $posts[$key]['is_joined'] = PostJoin::wherePostId($post->id)->whereUserId($user->id)->count();
                $posts[$key]['is_mentioned'] = PostMention::wherePostId($post->id)->whereUserId($user->id)->count();
            }

            return $this->sendResponse($posts,"Successful.");
        }
	}

    public function myPosts(Request $req){
        $user = Auth::user();
        if($user){
            $posts = Post::where('user_id',$user->id)->with('location','media','likes.user','mentions.user','comments.user','comments.replies.user','joins.user')->withCount('likes','comments','joins')->orderBy('created_at','desc')->get();
            foreach($posts as $key => $post){
                $posts[$key]['is_liked'] = PostLike::wherePostId($post->id)->whereUserId($user->id)->count();
            }
            return $this->sendResponse($posts,"Successful.");
        }
    }

    public function create(Request $req)
    {
    	$validator = Validator::make($req->all(),[
            'content'=>"required|string",
            'latitude'=>"nullable|string",
            'longitude'=>"nullable|string",
            'address'=>"nullable|string",
            'media'=>"nullable|array|max:5",
            'mention'=>"nullable|array",
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 403);
        }

    	$user = Auth::user();
    	if($user){
    		$post = new Post();
	        $post->user_id = $user->id;
	    	$post->university_id = $user->university->university_id;
	        $post->content = $req->content;
	        $post->status = null;
	        $post->save();

            // post location
            if(isset($req->latitude)){
                $postLocation = new PostLocation();
                $postLocation->post_id = $post->id;
                $postLocation->latitude = $req->latitude;
                $postLocation->longitude = $req->longitude;
                $postLocation->address = $req->address;
                $postLocation->save();
            }
            // post media
            if($req->hasfile('media')){
                foreach ($req->file('media') as $media) {
                    $postMedia = new PostMedia();
                    $postMedia->post_id = $post->id;
                    $postMedia->media = Storage::disk('public')->put('postMedias', $media);
                    $postMedia->save();
                }
            }
            // post mentions
            if(isset($req->mention)){
                foreach ($req->mention as $key => $mention) {
                    $postMention = new PostMention();
                    $postMention->post_id = $post->id;
                    $postMention->user_id = $mention;
                    $postMention->save();
                }
            }

    		$result = [
                "role"=>$user->role,
            ];
            return $this->sendResponse($result,"Successful.");
    	}
    }

    public function delete($id){
        $user = Auth::user();
        if($user){
            $post = Post::whereUserId($user->id)->whereId($id)->get();
            if(count($post) > 0){
                $postMention = PostMention::wherePostId($id)->whereUserId($user->id)->delete();
                $postLocation = PostLocation::wherePostId($id)->delete();
                $postLike = PostLike::wherePostId($id)->whereUserId($user->id)->delete();
                $postComment = PostComment::wherePostId($id)->whereUserId($user->id)->delete();
                $postJoin = PostJoin::wherePostId($id)->whereUserId($user->id)->delete();
                $postMedia = PostMedia::wherePostId($id)->get();
                foreach ($postMedia as $key => $media) {
                    Storage::disk('public')->delete($media->media);
                }
                $postMedia = PostMedia::wherePostId($id)->delete();
                $post = Post::whereUserId($user->id)->whereId($id)->delete();

                $result = [
                    "role"=>$user->role,
                ];
                return $this->sendResponse($result,"Successful.");
            }
        }
    }

    public function update(Request $req, $id)
    {
        $validator = Validator::make($req->all(),[
            'content'=>"required|string",
            'latitude'=>"nullable|string",
            'longitude'=>"nullable|string",
            'address'=>"nullable|string",
            'media'=>"nullable|array|max:5",
            'mention'=>"nullable|array",
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 403);
        }

        $user = Auth::user();
        if($user){
            $post = Post::whereUserId($user->id)->whereId($id)->get();
            if(count($post) > 0){
                // Update post
                $post = array('content' => $req->content);
                Post::whereId($id)->update($post);

                // Update Post Location
                $postLocation = PostLocation::wherePostId($id)->delete();
                if(isset($req->latitude)){
                    $postLocation = new PostLocation();
                    $postLocation->post_id = $id;
                    $postLocation->latitude = $req->latitude;
                    $postLocation->longitude = $req->longitude;
                    $postLocation->address = $req->address;
                    $postLocation->save();
                }

                // Update Post Mention
                $postMention = PostMention::wherePostId($id)->delete();
                if(isset($req->mention)){
                    foreach ($req->mention as $key => $mention) {
                        $postMention = new PostMention();
                        $postMention->post_id = $id;
                        $postMention->user_id = $mention;
                        $postMention->save();
                    }
                }

                // Update Post Media
                $postMedia = PostMedia::wherePostId($id)->get();
                foreach ($postMedia as $key => $media) {
                    Storage::disk('public')->delete($media->media);
                }
                $postMedia = PostMedia::wherePostId($id)->delete();
                if($req->hasfile('media')){
                    foreach ($req->file('media') as $media) {
                        $postMedia = new PostMedia();
                        $postMedia->post_id = $id;
                        $postMedia->media = Storage::disk('public')->put('postMedias', $media);
                        $postMedia->save();
                    }
                }

                $result = [
                    "role"=>$user->role,
                ];
                return $this->sendResponse($result,"Successful.");
            }else{
                $error = "Post Not Found.";
                return $this->sendError($error,"Failure.");
            }
        }
    }

    public function like($id)
    {
        $user = Auth::user();
        if($user){
            $like = PostLike::wherePostId($id)->whereUserId($user->id)->first();
            if($like == null){
                $postLike = PostLike::create(['post_id'=>$id,'user_id'=>$user->id,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

                $notify = Notification::postLikeNotification($postLike, $ref = self::POST_LIKE);

                $title = "Like";
                $message = $notify->message;
                $this->fcmService->setTitle($title)->setMessage($message)->setUser($user)->push();

                $result = [
                    "like"=>true,
                ];
                return $this->sendResponse($result,"Successful.");
            }else{
                PostLike::wherePostId($id)->whereUserId($user->id)->delete();

                $result = [
                    "like"=>false,
                ];
                return $this->sendResponse($result,"Successful.");
            }
        }
    }

    public function addComment(Request $req, $id)
    {
        $user = Auth::user();
        if($user){
            $add_comment = PostComment::create(['post_id'=>$id,'user_id'=>$user->id,'comment'=>$req->comment,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

            $notify = Notification::postCommentNotification($add_comment, $ref = self::POST_COMMENT);
            $title = "Comment";
            $message = $notify->message;
            $this->fcmService->setTitle($title)->setMessage($message)->setUser($user)->push();
            return $this->sendResponse($add_comment,"Successful.");
        }
    }

    public function deleteComment($id)
    {
        $user = Auth::user();
        if($user){
            $commentReplies = PostComment::findOrFail($id)->replies()->delete();
            $delete_comment = PostComment::findOrFail($id)->delete();
            return $this->sendResponse($delete_comment,"Successful.");
        }
    }

    public function join($id)
    {
        $user = Auth::user();
        if($user){
            $join = PostJoin::insert(['post_id'=>$id,'user_id'=>$user->id,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
            return $this->sendResponse($join,"Successful.");
        }
    }

    public function disjoin($id)
    {
        $user = Auth::user();
        if($user){
            $disjoin = PostJoin::wherePostId($id)->whereUserId($user->id)->delete();
            return $this->sendResponse($disjoin,"Successful.");
        }
    }

    public function show($id){
        $user = Auth::user();
        if($user){
            $post = Post::whereId($id)->with('user','location','media','mentions.user','comments.user','comments.replies.user','likes.user','joins.user')->withCount('likes','comments','joins')->first();

            if($post){
                $post['is_liked'] = PostLike::wherePostId($id)->whereUserId($user->id)->count();
                $post['is_joined'] = PostJoin::wherePostId($id)->whereUserId($user->id)->count();
                $post['is_mentioned'] = PostMention::wherePostId($id)->whereUserId($user->id)->count();
                $post['is_fav'] = PostFavourite::wherePostId($id)->whereUserId($user->id)->count();
            }
            return $this->sendResponse($post,"Successful.");
        }
    }

    public function favPost()
    {
        $user = Auth::user();
        if($user){
            $postFav = PostFavourite::whereUserId($user->id)->with('post','post.user','post.likes','post.comments','post.joins','post.location','post.media')->get();
            foreach($postFav as $key => $post){
                $postFav[$key]['is_liked'] = PostLike::wherePostId($post->post_id)->whereUserId($user->id)->count();
                $postFav[$key]['is_fav'] = PostFavourite::wherePostId($post->post_id)->whereUserId($user->id)->count();
            }
            return $this->sendResponse($postFav,"Successful.");
        }
    }

    public function addFav($id)
    {
        $user = Auth::user();
        if($user){
            $postFav = PostFavourite::insert(['post_id'=>$id,'user_id'=>$user->id,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

            $post = Post::whereId($id)->with('user','location','media','mentions.user','comments.user','comments.replies.user','likes.user','joins.user')->withCount('likes','comments','joins')->first();
            $post['is_fav'] = PostFavourite::wherePostId($id)->whereUserId($user->id)->count();
            return $this->sendResponse($post,"Successful.");
        }
    }

    public function removeFav($id)
    {
        $user = Auth::user();
        if($user){
            $postFav = PostFavourite::wherePostId($id)->whereUserId($user->id)->delete();

            $post = Post::whereId($id)->with('user','location','media','mentions.user','comments.user','comments.replies.user','likes.user','joins.user')->withCount('likes','comments','joins')->first();
            $post['is_fav'] = PostFavourite::wherePostId($id)->whereUserId($user->id)->count();
            return $this->sendResponse($post,"Successful.");
        }
    }

    public function removeAllFav()
    {
        $user = Auth::user();
        if($user){
            $postFav = PostFavourite::whereUserId($user->id)->delete();
            $result = "All Post removed from Favourites";
            return $this->sendResponse($result,"Successful.");
        }
    }

    public function addCommentReply(Request $req, $id)
    {
        $user = Auth::user();
        if($user){
            $add_comment_reply = PostCommentReply::create(['post_comment_id'=>$id,'user_id'=>$user->id,'reply'=>$req->reply,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

            $notify = Notification::postCommentReplyNotification($add_comment_reply, $ref = self::POST_REPLY_ON_YOUR_COMMENT);
            $title = "Comment";
            $message = $notify->message;
            $this->fcmService->setTitle($title)->setMessage($message)->setUser($user)->push();
            return $this->sendResponse($add_comment_reply,"Successful.");
        }
    }

    public function deleteCommentReply($id)
    {
        $user = Auth::user();
        if($user){
            $delete_comment_reply = PostCommentReply::findOrFail($id)->delete();
            return $this->sendResponse($delete_comment_reply,"Successful.");
        }
    }
}
