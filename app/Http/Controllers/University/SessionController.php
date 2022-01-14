<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SessionRequest;
use App\Models\Subject;
use App\Models\Session;
use App\Models\SessionAttendance;
use App\Models\Backpack;
use App\Models\BackpackItem;
use App\Models\Notification;
use App\Models\User;
use Storage;
use File;
use Auth;

class SessionController extends Controller
{
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
        $sessions = Session::whereCreatedBy(Auth::user()->id)->with('tutor','author','subject')->withCount('attendance')->get();
        $sessionJSON = json_encode($sessions);
        return view('university.session.index',compact('sessions','sessionJSON'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        $tutors = User::whereRoleId(3)->whereHas('university', function($q){
            $q->whereUniversityId(Auth::user()->id);
        })->get();
        return view('university.session.create',compact('tutors','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $req
     * @return \Illuminate\Http\Response
     */
    public function store(SessionRequest $req)
    {
        $user = Auth::user();
        if($req->hasfile('files')) {
            // create backpack
            $backpack = new Backpack();
            $backpack->user_id = $user->id;
            $backpack->name = "University Session by_".$user->id;
            $backpack->save();

            // Backpack Items
            foreach($req->file('files') as $file) {
                $backpackItem = new BackpackItem();
                $backpackItem->backpack_id = $backpack->id;
                $backpackItem->file_url = Storage::disk('public')->put('studymaterial/'.$user->first_name.$user->id, $file);
                $backpackItem->save();
            }
        }
        $session = new Session();
        $session->name = $req->name;
        $session->created_by = Auth::user()->id;
        $session->tutor_id = $req->tutor;
        $session->message = $req->message;
        $session->description = $req->description;
        $session->subject_id = $req->subject;
        $session->type = 0;
        $session->start_date_time = $req->start_date_time;
        $session->end_date_time = $req->end_date_time;
        $session->is_organized_by = 0;
        $session->backpack_id = $backpack->id??null;
        $session->save();

        $notify = Notification::notification($session, $ref = self::PUBLIC_SESSION);

        return redirect('/university/session')->with('success', 'Session has been created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $session = Session::findOrFail($id);
        $subjects = Subject::all();
        $tutors = User::whereRoleId(3)->whereHas('university', function($q){
            $q->whereUniversityId(Auth::user()->id);
        })->get();
        return view('university.session.edit', compact('session','tutors','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $req
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SessionRequest $req, $id)
    {
        $user = Auth::user();
        $session = Session::findOrFail($id);
        if(isset($session->backpack->backpackItems)){
            $session->backpack->backpackItems->each->delete();
            $session->backpack->delete();
        }        

        if($req->hasfile('files')) {
            // create backpack
            $backpack = new Backpack();
            $backpack->user_id = $user->id;
            $backpack->name = "University Session by_".$user->id;
            $backpack->save();

            // Backpack Items
            foreach($req->file('files') as $file) {
                $backpackItem = new BackpackItem();
                $backpackItem->backpack_id = $backpack->id;
                $backpackItem->file_url = Storage::disk('public')->put('studymaterial/'.$user->first_name.$user->id, $file);
                $backpackItem->save();
            }
        }

        if($req->old_files){
            if(empty($backpack)){
                $backpack = new Backpack();
                $backpack->user_id = $user->id;
                $backpack->name = "University Session by_".$user->id;
                $backpack->save();
            }           

            foreach ($req->old_files as $key => $old_files) {
                $backpackItem = new BackpackItem();
                $backpackItem->backpack_id = $backpack->id;
                $backpackItem->file_url = $old_files;
                $backpackItem->save();
            }
        }

        $form_data = array(
            'name' => $req->name,
            'created_by' => $user->id,
            'tutor_id' => $req->tutor,
            'message' => $req->message,
            'description' => $req->description,
            'subject_id' => $req->subject,
            'type' => 0,
            'start_date_time' => $req->start_date_time,
            'end_date_time' => $req->end_date_time,
            'is_organized_by' => 0,
            'backpack_id' => $backpack->id??null,
        );
        $session->update($form_data);
        return redirect('/university/session')->with('success', 'Session has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attendance = SessionAttendance::whereSessionId($id)->delete();
        $session = Session::findOrFail($id)->delete();
        return redirect('/university/session')->with('success','Session has been deleted successfully.');
    }

    public function show($id)
    {
        $sessionAttendance = SessionAttendance::whereSessionId($id)->with('user')->get();
        $sessionAttendanceJSON = json_encode($sessionAttendance);
        return view('university.session.show', compact('sessionAttendance','sessionAttendanceJSON'));
    }

    public function detail($id)
    {
        $session = Session::whereId($id)->with('tutor','author','attendance.user')->first();
        return view('university.session.detail', compact('session'));
    }
}
