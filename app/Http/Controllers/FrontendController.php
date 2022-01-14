<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentDetail;
use App\Models\TutorDetail;
use App\Models\UserSubject;
use App\Models\UserUniversity;
use App\Models\Newsletter;
use Mail;
use App\Mail\NotifyMail;
use App\Mail\Contact;

class FrontendController extends Controller
{
    public function contact(Request $req){
    	request()->validate([
            'name'=>'required|string|min:2|max:255',
            'email'=>'required|email',
            'message'=>'required|string|min:3',
        ]);

        // Add mail

        // Resp mail
        $email = $req->email;
        Mail::to($email)->send(new Contact($email));
        return redirect('contact')->with('success','Your Query has been raised.');
    }

    public function newsletter(Request $req){
        request()->validate([
            'email'=>'required|email|unique:newsletters'
        ]);

        Newsletter::create(['email'=>$req->email]);
        return redirect('/#newsletter')->with('success','Thanks for subscribing us.');
    }

    public function studentRegister(Request $req){
    	request()->validate([
            'first_name'=>"required|string|min:3|max:255",
            'last_name'=>"required|string|min:3|max:255",
            'email'=>"required|email|max:255|unique:users",
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users',
            'country'=>'required|string|min:2|max:255',
            'city'=>'required|string|min:2|max:255',
            'avatar'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required|min:6|string|confirmed',
            'date_of_birth' => 'date|before:now',
            'subject'=> 'nullable|array',
            'headline' => 'required',
            'introduction'=> 'required'
        ]);

        $image_name = $req->avatar;
        $image = $req->file('avatar');
        if($image != ''){
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/avatar'), $image_name);
        }

        $user = User::create([
            'role_id' => 4,
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'date_of_birth' => $req->date_of_birth,
            'country' => $req->country, 
            'city' => $req->city, 
            'mobile' => $req->mobile,
            'password' => bcrypt($req->password),
            'avatar' => $image_name,
            'status' => 0
        ]);

        $studentDetail = StudentDetail::create([
        	'user_id' => $user->id,
        	'college_id'=> $req->college,
        	'headline' => $req->headline,
			'introduction' => $req->introduction
        ]);

        if($req->subject){
        	foreach($req->subject as $subject){
        		$subjects = UserSubject::create([
        			'user_id'=>$user->id,
        			'subject_id'=>$subject
        		]);
        	}
        }

        Mail::to($req->email)->send(new NotifyMail($user));

        return redirect('become-student')->with('success','<b>Register Successfully!</b> Verify your account through email.');
    }

    public function tutorRegister(Request $req){
    	request()->validate([
            'first_name'=>"required|string|min:3|max:255",
            'last_name'=>"required|string|min:3|max:255",
            'email'=>"required|email|max:255|unique:users",
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users',
            'country'=>'required|string|min:2|max:255',
            'city'=>'required|string|min:2|max:255',
            'avatar'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required|min:6|string|confirmed',
            'date_of_birth' => 'date|before:now',
            'subject'=> 'nullable|array',
            'headline' => 'required',
            'introduction'=> 'required',
            'zoom' =>'string|nullable|min:3',
            'university_id' =>'integer|nullable',
        ]);

        $image_name = $req->avatar;
        $image = $req->file('avatar');
        if($image != ''){
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/avatar'), $image_name);
        }

        $user = User::create([
            'role_id' => 3,
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'date_of_birth' => $req->date_of_birth,
            'country' => $req->country, 
            'city' => $req->city, 
            'mobile' => $req->mobile,
            'password' => bcrypt($req->password),
            'avatar' => $image_name,
            'status' => 0
        ]);

        $tutorDetail = TutorDetail::create([
            'user_id' => $user->id,
            'headline' => $req->headline,
            'introduction' => $req->introduction,
            'zoom' => $req->zoom,
        ]);

        $userUniv = UserUniversity::create([
        	'user_id' => $user->id,
        	'university_id' => $req->university_id
        ]);

        if($req->subject){
        	foreach($req->subject as $subject){
        		$subjects = UserSubject::create([
        			'user_id'=>$user->id,
        			'subject_id'=>$subject
        		]);
        	}
        }

        Mail::to($req->email)->send(new NotifyMail($user));

        return redirect('become-tutor')->with('success','<b>Register Successfully!</b> Verify your account through email.');
    }
}
