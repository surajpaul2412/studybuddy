<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\User;
use App\Models\SessionAttendance;
use App\Models\Backpack;
use App\Models\BackpackItem;
use App\Models\Review;
use App\Models\Notification;
use Carbon\carbon;
use Mail;
use App\Mail\sendOTP;
use Storage;
use File;
use Auth;
use Validator;
use App\Services\Fcm\FcmService;

class SessionController extends Controller
{   
    private $fcmService;
    public function __construct(FcmService $fcmService)
    {
        $this->fcmService = $fcmService;

        $this->middleware('CheckStudent')->only([
            'create','requestPerDate','extendRequest'
        ]);
        $this->middleware('CheckTutor')->only([
            'eventList','eventPerDate','extendUpdate' 
        ]);

        if(env('timezone')){
            date_default_timezone_set(env('timezone'));
        }
    }

    public const PUBLIC_SESSION = 1;
    public const PRIVATE_SESSION = 2;
    public const POST_LIKE = 3;
    public const POST_COMMENT = 4;
    public const POST_REPLY_ON_YOUR_COMMENT = 5;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user){
            $sessions = Session::whereDate('end_date_time','>',Carbon::now())->orderBy('created_at','desc')->whereCreatedBy($user->university->university_id)->with('tutor.role','subject','attendance.user')->get();

            foreach($sessions as $key => $session){
                $sessions[$key]['attendance_count'] = SessionAttendance::whereSessionId($session->id)->count();
                $sessions[$key]['is_attending'] = SessionAttendance::whereSessionId($session->id)->whereUserId($user->id)->count();
            }

            return $this->sendResponse($sessions,"Successful.");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        if($user){
            $session = Session::whereId($id)->with('tutor.role','author.role','subject','attendance.user','backpack.backpackItems')->first();
            $session['attendance_count'] = SessionAttendance::whereSessionId($session->id)->count();
            $session['is_attending'] = SessionAttendance::whereSessionId($session->id)->whereUserId($user->id)->count();

            return $this->sendResponse($session,"Successful.");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function interested($id)
    {
        $user = Auth::user();
        if($user){
            $session = Session::whereId($id)->count();
            if($session > 0){
                SessionAttendance::insert(['session_id'=>$id,'user_id'=>$user->id,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

                $result = "Successfully Added";
                return $this->sendResponse($result,"Successful.");
            }
        }
    }

    public function notInterested($id)
    {
        $user = Auth::user();
        if($user){
            $session = Session::whereId($id)->count();
            if($session > 0){
                SessionAttendance::whereSessionId($id)->whereUserId($user->id)->delete();
                $result = "Successfully Removed";
                return $this->sendResponse($result,"Successful.");
            }
        }
    }

    public function review(Request $req, $id)
    {
        $validator = Validator::make($req->all(),[
            'star'=>"required|min:1|max:5",
            'session'=>"required|integer",
            'review'=>"required|string|min:3"
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
            $reviewUser = User::find($id);
            if (!isset($reviewUser)) {
                return $this->sendError("Invalid user selected!","Failure.");
            }
            $review = Review::insert(['user_id'=>$id,'reviewer_id'=>$user->id,'star'=>$req->star,'session_id'=>$req->session,'review'=>$req->review]);
            $avgRating = Review::whereUserId($id)->avg('star');
            $reviewUser->update(['avg_rating'=>$avgRating]);
            $result = "Thanks for the review.";
            return $this->sendResponse($result,"Successful.");
        }
    }

    public function calendar()
    {
        $user = Auth::user();
        if($user){
            $user_session = [];
            $sessions = $user->sessions()->get();
            // dd($user->id);
            foreach ($sessions as $key => $session) {              
                $current_date = carbon::now()->format('Y-m-d');
                $session_date = date("Y-m-d", strtotime($session->start_date_time));

                $colorCode = '';
                if ($current_date == $session_date) {   //present
                    $colorCode = '#4A6FDA';
                    $textcolorCode = '#fff';
                }elseif($current_date > $session_date){ //past
                    $colorCode = '#E0E2EC';
                    $textcolorCode = '#3F414E';
                }else{                                  //future
                    $colorCode = '#FD7441';
                    $textcolorCode = '#fff';
                }
                $customStyles = array(
                    'container' => [
                        'backgroundColor' => $colorCode,
                        'borderRadius'=> 5,
                        'elevation'=> 5,
                        'justifyContent'=> 'center'
                    ],
                    'text' => [
                        'color' => $textcolorCode,
                    ],
                    'session' => $session
                );
                $result = array(
                    'customStyles' => $customStyles
                );
                $user_session[][$session_date] = $result;
            }
            return $this->sendResponse($user_session,"Successful.");
        }
    }

    public function tutorCalendar()
    {
        $user = Auth::user();
        if($user){
            $user_session = [];
            $sessions = Session::whereTutorId($user->id)->whereCreatorStatus(1)->get();
            foreach ($sessions as $key => $session) {              
                $current_date = carbon::now()->format('Y-m-d');
                $session_date = date("Y-m-d", strtotime($session->start_date_time));

                $colorCode = '';
                if ($current_date == $session_date) {   //present
                    $colorCode = '#4A6FDA';
                    $textcolorCode = '#fff';
                }elseif($current_date > $session_date){ //past
                    $colorCode = '#E0E2EC';
                    $textcolorCode = '#3F414E';
                }else{                                  //future
                    $colorCode = '#FD7441';
                    $textcolorCode = '#fff';
                }
                $customStyles = array(
                    'container' => [
                        'backgroundColor' => $colorCode,
                        'borderRadius'=> 5,
                        'elevation'=> 5,
                        'justifyContent'=> 'center'
                    ],
                    'text' => [
                        'color' => $textcolorCode,
                    ],
                    'session' => $session
                );
                $result = array(
                    'customStyles' => $customStyles
                );
                $user_session[][$session_date] = $result;
            }
            return $this->sendResponse($user_session,"Successful.");
        }
    }

    /* Student */

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'subject_id'=> "required|exists:subjects,id",
            'tutor_id'=> "required|exists:users,id,role_id,3",
            'type'=> "required|string|in:0,1",
            'start_date_time'=> "required|string|date_format:Y-m-d H:i:s",
            'address'=> "required|string",
            'latitude'=> "required|string",
            'longitude'=> "required|string",
            'message'=> "nullable|string",
            'description'=> "nullable|string",
            'files'=> "nullable|max:10000",
            'timezone'=>'required'
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
        if($req->hasfile('files')) {
            // create backpack
            $backpack = new Backpack();
            $backpack->user_id = $user->id;
            $backpack->name = "Session_by".$user->id;
            $backpack->save();

            // Backpack Items
            foreach($req->file('files') as $file) {
                $backpackItem = new BackpackItem();
                $backpackItem->backpack_id = $backpack->id;
                $backpackItem->file_url = Storage::disk('public')->put('studymaterial/'.$user->first_name.$user->id, $file);
                $backpackItem->save();
            }
        }

        $tutor = User::find($req->tutor_id);
        if (!isset($tutor->tutorDetail->hour_rate)) {
            return $this->sendError("Tutor doesn't setup his profile.Please try again later!","Failure.");
        }
        if($tutor->tutorDetail->hour_rate <= $user->wallet_balance){
            $data = $req->all();
            // Timezone converter -> UTC
            $dt = new DateTime($data['start_date_time'], new DateTimeZone($req->timezone));
            $dt1 = $dt->setTimeZone(new DateTimeZone('UTC'));
            $data['start_date_time'] = $dt1->format('Y-m-d H:i:s');
            $data['end_date_time'] = date('Y-m-d H:i:s', strtotime('+1 hour',strtotime($data['start_date_time'])));
            $data['name'] = 'Session with '.$tutor->full_name;
            $data['income'] = $tutor->tutorDetail->hour_rate;
            $data['created_by'] = $user->id;
            $data['creator_status'] = 1;
            $data['is_organized_by'] = 1;
            $data['backpack_id'] = $backpack->id??null;
            $session = Session::createUserSession($data);

            $attendance = SessionAttendance::create(['session_id'=>$session->id,'user_id'=>$user->id,'created_at'=>carbon::now(),'updated_at'=>carbon::now()]);

            if($session){
                $pay = pay($session, $user);
            }

            $notify = Notification::notification($session, $ref = self::PRIVATE_SESSION);

            $title = "Session created";
            $message = "Session created";
            $this->fcmService->setTitle($title)->setMessage($message)->setUser($user)->push();
            
            return $this->sendResponse($session,"Successful.");
        }else{
            return $this->sendError("Sorry ! Insufficient balance","Failure.");
        }
    }

    public function requestList(Request $req)
    {   
        $validator = Validator::make($req->all(),[
            'month'=> "required|string|date_format:Y-m",
            'type'=> "nullable|string|in:pending,accepted,completed,cancelled", // pending,accepted,completed
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
        $typeArr = explode(',',$req->type??"");
        $start = new \DateTime(date('Y-m-01', strtotime($req->month)));
        $end = new \DateTime(date('Y-m-d', strtotime("+1 month", strtotime($req->month))));
        $sessions = Session::whereCreatedBy($user->id)->whereDate('start_date_time','>',$start)->whereDate('start_date_time','<=',$end);

        /* TYPE */
        if (in_array('pending', $typeArr)) {
            $sessions = $sessions->whereTutorStatus(1)->whereCreatorStatus(0)->whereStatus(0);
        }else if (in_array('accepted', $typeArr)) {
            $sessions = $sessions->whereTutorStatus(1)->whereStatus(0);
        }else if (in_array('completed', $typeArr)) {
            $sessions = $sessions->whereStatus(2);
        }else if (in_array('cancelled', $typeArr)) {
            $sessions = $sessions->whereStatus(3);
        }
        $sessions = $sessions->with('tutor.role','subject','author')->orderBy('created_at','desc')->get();
        return $this->sendResponse($sessions,"Successful.");
    }

    public function requestPerDate(Request $req)
    {   
        $validator = Validator::make($req->all(),[
            'date'=> "required|string|date_format:Y-m-d",
            'type'=> "nullable|string|in:pending,accepted,completed,cancelled", // pending,accepted,completed
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
        $typeArr = explode(',',$req->type??"");
        $start = new \DateTime(date('Y-m-d', strtotime($req->date)));
        $end = new \DateTime(date('Y-m-d', strtotime("+1 day", strtotime($req->date))));
        $sessions = Session::whereCreatedBy($user->id)->whereDate('start_date_time','>=',$start)->whereDate('start_date_time','<=',$end);

        /* TYPE */
        if (in_array('pending', $typeArr)) {
            $sessions = $sessions->whereTutorStatus(1)->whereCreatorStatus(0)->whereStatus(0);
        }else if (in_array('accepted', $typeArr)) {
            $sessions = $sessions->whereTutorStatus(1)->whereStatus(0);
        }else if (in_array('completed', $typeArr)) {
            $sessions = $sessions->whereStatus(2);
        }else if (in_array('cancelled', $typeArr)) {
            $sessions = $sessions->whereStatus(3);
        }
        $sessions = $sessions->orderBy('created_at','desc')->get();
        return $this->sendResponse($sessions,"Successful.");
    }


    /* Tutor */

    public function eventList(Request $req)
    {   
        $validator = Validator::make($req->all(),[
            'month'=> "required|string|date_format:Y-m",
            'type'=> "nullable|string|in:pending,accepted,completed,cancelled", // pending,accepted,completed
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
        $typeArr = explode(',',$req->type??"");
        $start = new \DateTime(date('Y-m-01', strtotime($req->month)));
        $end = new \DateTime(date('Y-m-d', strtotime("+1 month", strtotime($req->month))));

        $sessions = Session::whereTutorId($user->id)->whereDate('start_date_time','>',$start)->whereDate('start_date_time','<=',$end);

        /* TYPE */
        if (in_array('pending', $typeArr)) {
            $sessions = $sessions->whereTutorStatus(1)->whereCreatorStatus(0)->whereStatus(0);
        }else if (in_array('accepted', $typeArr)) {
            $sessions = $sessions->whereTutorStatus(1)->whereStatus(0);
        }else if (in_array('completed', $typeArr)) {
            $sessions = $sessions->whereStatus(2);
        }else if (in_array('cancelled', $typeArr)) {
            $sessions = $sessions->whereStatus(3);
        }
        $sessions = $sessions->with('tutor.role','subject','author')->orderBy('created_at','desc')->get();
        return $this->sendResponse($sessions,"Successful.");
    }

    public function eventPerDate(Request $req)
    {   
        $validator = Validator::make($req->all(),[
            'date'=> "required|string|date_format:Y-m-d",
            'type'=> "nullable|string|in:pending,accepted,completed,cancelled", // pending,accepted,completed
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
        $typeArr = explode(',',$req->type??"");
        $start = new \DateTime(date('Y-m-d', strtotime($req->date)));
        $end = new \DateTime(date('Y-m-d', strtotime("+1 day", strtotime($req->date))));
            $sessions = Session::whereTutorId($user->id)->whereDate('start_date_time','>=',$start)->whereDate('start_date_time','<=',$end);

        /* TYPE */
        if (in_array('pending', $typeArr)) {
            $sessions = $sessions->whereTutorStatus(1)->whereCreatorStatus(0)->whereStatus(0);
        }else if (in_array('accepted', $typeArr)) {
            $sessions = $sessions->whereTutorStatus(1)->whereStatus(0);
        }else if (in_array('completed', $typeArr)) {
            $sessions = $sessions->whereStatus(2);
        }else if (in_array('cancelled', $typeArr)) {
            $sessions = $sessions->whereStatus(3);
        }
        $sessions = $sessions->with('tutor.role','subject','author')->orderBy('created_at','desc')->get();
        return $this->sendResponse($sessions,"Successful.");
    }

    public function updateRequest(Request $req)
    {
        $user = Auth::user();
        $rules = [
            'id'=> "required|exists:sessions,id,tutor_id,".$user->id,
            'type'=> "required|string|in:accept,reject,update,ready,started,completed",
        ];
        if (isset($req->type) && $req->type == "update") {
            $rules['start_date_time'] = "required|string|date_format:Y-m-d H:i:s";
            $rules['files'] = "nullable|max:10000";
        }
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 403);
        }

        $session = Session::find($req->id);
        if($req->hasfile('files')) {
            if($session->backpack_id){
                foreach($req->file('files') as $file) {
                    $backpackItem = new BackpackItem();
                    $backpackItem->backpack_id = $session->backpack_id;
                    $backpackItem->file_url = Storage::disk('public')->put('studymaterial/'.$user->first_name.$user->id, $file);
                    $backpackItem->save();
                }
            }else{
                // create backpack
                $backpack = new Backpack();
                $backpack->user_id = $user->id;
                $backpack->name = "Session_by".$user->id;
                $backpack->save();

                // Backpack Items
                foreach($req->file('files') as $file) {
                    $backpackItem = new BackpackItem();
                    $backpackItem->backpack_id = $backpack->id;
                    $backpackItem->file_url = Storage::disk('public')->put('studymaterial/'.$user->first_name.$user->id, $file);
                    $backpackItem->save();
                }
            }
        }

        if ($session->status == 4) {
            return $this->sendError("Invalid session selected its already cancelled!","Failure.");
        }
        if ($session->status == 3) {
            return $this->sendError("Invalid session selected its already completed!","Failure.");
        }
        if (($req->type == "accept" || $req->type == "reject" || $req->type == "update") && ($session->tutor_status !== 0 || $session->status !== 0)) {
            return $this->sendError("Invalid session selected its already in progress!","Failure.");
        }
        if ($req->type == "accept") {
            $session->update([
                'tutor_status'=>1,
                'status'=>1 
            ]);
            return $this->sendResponse($session,"Successful.");
        }elseif ($req->type == "reject") {
            $session->update([
                'tutor_status'=>2,
                'status'=>4 
            ]);
            return $this->sendResponse($session,"Successful.");
        }elseif ($req->type == "update") {
            if($session->backpack_id){
                $session->update([
                    'tutor_status'=>1,
                    'start_date_time'=>$req->start_date_time,
                    'end_date_time'=> date('Y-m-d H:i:s', strtotime('+1 hour',strtotime($req->start_date_time))),
                    'status'=>1,
                    'backpack_id'=> $session->backpack_id,
                ]);
            }else{
                $session->update([
                    'tutor_status'=>1,
                    'start_date_time'=>$req->start_date_time,
                    'end_date_time'=> date('Y-m-d H:i:s', strtotime('+1 hour',strtotime($req->start_date_time))),
                    'status'=>1,
                    'backpack_id'=> $backpack->id,
                ]);
            }
            return $this->sendResponse($session,"Successful.");
        }elseif ($req->type == "ready") {
            if ($session->tutor_status !== 1 || $session->status !== 1) {
                return $this->sendError("Invalid session selected it is not accepted yet!","Failure.");
            }
            $updatedArr = [
                'tutor_ready'=>1,
            ];
            if (!isset($session->otp)) {
                $updatedArr['otp'] = mt_rand(1111,9999);
            }
            $session->update($updatedArr);
            return $this->sendResponse($session,"Successful.");
        }elseif ($req->type == "started") {
            if ($session->otp_verified != 1) {
                return $this->sendError("OTP has not been verified yet!","Failure.");
            }
            $updatedArr = [
                'status'=>2,
            ];
            $session->update($updatedArr);
            return $this->sendResponse($session,"Successful.");
        }elseif ($req->type == "completed") {
            if ($session->status !== 2) {
                return $this->sendError("Session has not been started yet!","Failure.");
            }
            $updatedArr = [
                'status'=>3,
            ];
            $session->update($updatedArr);
            // Add money to tutors wallet
            if($session){
                $user = Auth::user();
                $income = addIncome($session, $user);
            }
            return $this->sendResponse($session,"Successful.");
        }
    }

    public function requestOtp($id)
    {
        $user = Auth::user();
        if($user){
            $session = Session::whereId($id)->first();
            $otp = mt_rand(1111,9999);

            if($session){
                if($user->role->slug == "tutor"){
                    // Tutor*
                    $session->update(['tutor_ready'=>1]);
                    if($session->creator_ready == 1){
                        $this->updateOTP($session, $user, $otp);
                        return $this->sendResponse("OTP sent to your email!","Successful.");
                    }else{
                        return $this->sendError("Student is not ready yet!","Failure.",201);
                    }
                }else{
                    // Student*
                    $session->update(['creator_ready'=>1]);
                    if($session->tutor_ready == 1){
                        $this->updateOTP($session, $user, $otp);
                        return $this->sendResponse("OTP sent to your email!","Successful.");
                    }else{
                        return $this->sendError("Wrong OTP!","Failure.",201);
                    }
                }
            }else{
                return $this->sendError("Invalid Session!","Failure.",201);
            }
        }
    }

    protected function UpdateOTP($session, $user, $otp){
        $session->update(['otp'=>$otp]);
        Mail::to($user->email)->send(new sendOTP($user, $otp));
        return;
    }

    public function verifyOtp(Request $req, $id)
    {
        $validator = Validator::make($req->all(),[
            'otp'=>"required|integer|digits:4",
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
            $session = Session::whereId($id)->first();
            if($session){
                if($user->role->slug == "tutor"){
                    // Tutor*
                    if($session->otp == $req->otp){
                        $session->update(['tutor_otp_verified'=>1,'status'=>2]);
                        return $this->sendResponse("OTP Verified Successfully!","Successful.");
                    }else{
                        return $this->sendError("Wrong OTP!","Failure.",201);
                    }
                }else{
                    // Student*
                    if($session->otp == $req->otp){
                        $session->update(['creator_otp_verified'=>1]);
                        return $this->sendResponse("OTP Verified Successfully!","Successful.");
                    }else{
                        return $this->sendError("Wrong OTP!","Failure.",201);
                    }
                }
            }else{
                return $this->sendError("Invalid Session!","Failure.",201);
            }
        }
    }

    public function timer($id){
        $user = Auth::user();
        if($user){
            $session = Session::findOrFail($id);
            if($session->tutor_otp_verified + $session->creator_otp_verified == 2){
                $current_date_time = Carbon::now();
                $session_start_date_time = new \DateTime($session->start_date_time);
                $session_end_date_time = new \DateTime($session->end_date_time);

                if($current_date_time <= $session_end_date_time){
                    $totalDuration = $current_date_time->diffInSeconds($session_end_date_time);
                    $timer = gmdate('H:i:s', $totalDuration);
                    return $this->sendResponse($timer,"Successful.");
                }else{
                    return $this->sendError("No active session found!","Failure.",201);
                }                
            }else{
                return $this->sendError("Please verify your otp first!","Failure.",201);
            }
        }
    }

    public function extendRequest($id){
        $user = Auth::user();
        if($user){
            $session = Session::findOrFail($id);
            $budder_time = new \DateTime($session->end_date_time);
            $budder_time->add(new \DateInterval('PT1H'));


            $all_sessions = Session::whereTutorId($session->tutor_id)->where('id','!=',$id)->get();
            foreach ($all_sessions as $key => $per_session) {
                if($budder_time >= new \DateTime($per_session->start_date_time) && $per_session->tutor_status != 2 && $per_session->status != 3){
                    return $this->sendError("Tutor already aligned with another class!","Failure.",201);
                }
            }

            if($session->status == 1){
                $session->update(['extention_status'=>1]);
                // Notify for extend request
                return $this->sendResponse("Request Successfully sent.","Successful.");
            }else{
                return $this->sendError("No active session found!","Failure.",201);
            }
        }
    }

    public function extendUpdate(Request $req, $id)
    {
        $validator = Validator::make($req->all(),[
            'type'=> "required|string|in:accept,reject", // accepted,rejected
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
        $session = Session::findOrFail($id);
        if($user){
            if($req->type == "accept"){
                $session->update(
                    ['extention_status'=>2,
                     'extention_count'=>$session->extention_count +1,
                     'end_date_time'=> date('Y-m-d H:i:s', strtotime('+1 hour',strtotime($session->end_date_time))),
                ]);
                return $this->sendResponse("Session Successfully Extended.","Successful.");
            }elseif($req->type == "reject"){
                $session->update(['extention_status'=>3]);
                return $this->sendResponse("Session Successfully Rejected.","Successful.");
            }
        }
    }
}

