<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\SessionAttendance;
use Auth;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Session::with('tutor','author','subject')->withCount('attendance')->get();
        $sessionJSON = json_encode($sessions);
        return view('admin.session.index',compact('sessions','sessionJSON'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sessionAttendance = SessionAttendance::whereSessionId($id)->with('user')->get();
        $sessionAttendanceJSON = json_encode($sessionAttendance);
        return view('admin.session.show', compact('sessionAttendance','sessionAttendanceJSON'));
    }

    public function detail($id)
    {
        $session = Session::whereId($id)->with('tutor','author','attendance.user')->first();
        return view('admin.session.detail', compact('session'));
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
        return redirect('/admin/session')->with('success','Session has been deleted successfully.');
    }
}
