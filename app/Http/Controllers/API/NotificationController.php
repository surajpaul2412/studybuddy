<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Notification;
use App\Models\UserNotificationPreference;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user){
            $notification = Notification::whereUserId($user->id)->with('session.author','session.tutor','post.user')->orderBy('created_at','desc')->paginate(15);
            return $this->sendResponse($notification,"Successful.");
        }
    }

    public function read($id)
    {
        $user = Auth::user();
        if($user){
            $notification = Notification::whereUserId($user->id)->whereId($id)->update(['is_active'=>0]);
            return $this->sendResponse($notification,"Successful.");
        }
    }

    public function preference(Request $req){
        $user = Auth::user();
        $data = $req->all();
        $data['user_id'] = $user->id;

        if($user->notificationPreference){
            UserNotificationPreference::whereUserId($user->id)->update($data);
            $notification = UserNotificationPreference::whereUserId($user->id)->first();
        }else{
            $notification = UserNotificationPreference::create($data);
        }
        return $this->sendResponse($notification,"Successful."); 
    }

    public function preferenceList(){
        $user = Auth::user();
        if($user->notificationPreference){
            return $this->sendResponse($user->notificationPreference,"Successful.");
        }
        $notificationPreference['user_id']= $user->id;
        $notificationPreference['followups']=
        $notificationPreference['mentions']=
        $notificationPreference['posts']=
        $notificationPreference['chatbox']=
        $notificationPreference['session_reminder']=1;
        return $this->sendResponse($notificationPreference,"Successful.");
    }
}
