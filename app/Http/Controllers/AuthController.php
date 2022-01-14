<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\StudentDetail;
use App\Models\TutorDetail;
use App\Models\UserSubject;
use App\Models\College;
use App\Models\Withdraw;
use App\Models\UserUniversity;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Mail;
use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use DB;

class AuthController extends Controller
{
    protected function generateAccessToken($user)
    {
        $token = $user->createToken($user->email.'-'.now());

        return $token->accessToken;
    }

    public function register(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'role_id'=>'required|integer',
            'email'=>"required|email|max:255|unique:users",
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users',
            'country'=>'required|string|min:2|max:255',
            'city'=>'required|string|min:2|max:255',
            'avatar'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required|min:6|string|confirmed',
            'date_of_birth' => 'date|before:now',
            'type'=>'integer|nullable|required_if:role_id,==,3'
        ]);       
        if($validator->fails()){
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 403);
        }

        if($req->type == 2){
            $domain_check = $this->domainCheck($email = $req->only('email'));
            if(!$domain_check){
                return response()->json(['status' => 'failure', 'message' => 'Sorry! Your university does not exist in our records. Please try again later'], 403);
            }
        }

        $input = $req->all();
        $input['password'] = bcrypt($req->password);
        $input['status'] = 0;

        $user = User::create($input);

        if(isset($req->type)){
            $tutorType['user_id'] = $user->id;
            $tutorType['type'] = $req->type;            
            $tutorDetail = TutorDetail::create($tutorType);
        }

        if(Auth::attempt(['email'=>$req->email, 'password'=>$req->password])) {
            $user = Auth::user();
            $token = $user->createToken($user->email.'-'.now());

            Mail::to($req->email)->send(new NotifyMail($user));
            
            $result = [
                'token'=> $token->accessToken,
                'role'=> $user->role
            ];
            $response = [
                'success' => true,
                'data' => $result,
                'message' => 'Success.'
            ];
            return response()->json($response, 200);
        }
    }

    public function domainCheck($email){
        $univ_domains = User::whereRoleId(2)->pluck('email_domain')->toArray();
        $userEmail = explode('@', $email['email']);

        if( in_array($userEmail[1], $univ_domains)){
            return true;
        }
        return false;
    }

    public function verifyUser($id){
        $user = User::findOrFail($id)->update(['status'=>1]);
        return redirect('/login')->with('success', 'You are verified successfully.');
    }

    // student detail after registration-->done
    public function studentDetail(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'first_name'=>'required|string|min:2|max:255',
            'last_name'=>"nullable|string|min:2|max:255",
            'college_id' =>'integer|required',
            'headline' =>'string|required|min:3',
            'introduction' =>'string|required|min:3',
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
            $user_data = array(
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
            );
            User::whereId($user->id)->update($user_data);

            $studentDetail = StudentDetail::whereUserId($user->id)->count();
            if($studentDetail < 1){
                $universityId = College::whereId($req->college_id)->pluck('university_id')->first();
                if($universityId){
                    $userUniversity = UserUniversity::create([
                        'user_id' => $user->id,
                        'university_id' => $universityId
                    ]);
                }

                $studentDetail = StudentDetail::create([
                    'user_id' => $user->id,
                    'college_id' => $req->college_id,
                    'headline' => $req->headline,
                    'introduction' => $req->introduction
                ]);

                $result = [
                    'role'=> $user->role
                ];

                $response = [
                    'success' => true,
                    'data' => $result,
                    'message' => 'Success.'
                ];
                return response()->json($response, 200);
            }else{
                $student_data = array(
                    'user_id' => $user->id,
                    'college_id' => $req->college_id,
                    'headline' => $req->headline,
                    'introduction' => $req->introduction
                );
                StudentDetail::whereUserId($user->id)->update($student_data);

                $oldClgId = $user->university->university_id;
                $universityId = College::whereId($req->college_id)->pluck('university_id')->first();
                $userUniversity = array(
                    'user_id' => $user->id,
                    'university_id' => $universityId
                );
                UserUniversity::whereUserId($user->id)->whereUniversityId($oldClgId)->update($userUniversity);

                $result = [
                    'role'=> $user->role
                ];
                $response = [
                    'success' => true,
                    'data' => $result,
                    'message' => 'Success.'
                ];
                return response()->json($response, 200);
            }
        }
    }

    public function tutorDetail(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'first_name'=>'required|string|min:2|max:255',
            'last_name'=>"nullable|string|min:2|max:255",
            'education' =>'integer|required',
            'headline' =>'string|required|min:3',
            'introduction' =>'string|required|min:3',
            'zoom' =>'string|nullable|min:3',
            'type' =>'nullable',
            'university_id' =>'integer|nullable',
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
            $user_data = array(
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
            );
            User::whereId($user->id)->update($user_data);

            $tutorDetail = TutorDetail::whereUserId($user->id)->count();
            if($tutorDetail < 1){
                $userUniversity = UserUniversity::create([
                    'user_id' => $user->id,
                    'university_id' => $req->university_id
                ]);

                $tutorDetail = TutorDetail::create([
                    'user_id' => $user->id,
                    'university_id' => $req->university_id,
                    'headline' => $req->headline,
                    'introduction' => $req->introduction,
                    'education' => $req->education,
                    'zoom' => $req->zoom,
                ]);

                $result = [
                    'role'=> $user->role
                ];

                $response = [
                    'success' => true,
                    'data' => $result,
                    'message' => 'Success.'
                ];
                return response()->json($response, 200);
            }else{
                $tutor_data = array(
                    'user_id' => $user->id,
                    'headline' => $req->headline,
                    'introduction' => $req->introduction,
                    'education' => $req->education,
                    'zoom' => $req->zoom,
                );
                TutorDetail::whereUserId($user->id)->update($tutor_data);

                $uniCheck = UserUniversity::whereUserId($user->id)->count();
                if($uniCheck > 0){
                    $oldClgId = $user->university->university_id;
                    $userUniversity = array(
                        'user_id' => $user->id,
                        'university_id' => $req->university_id
                    );
                    UserUniversity::whereUserId($user->id)->whereUniversityId($oldClgId)->update($userUniversity);
                }else{
                    $userUniversity = UserUniversity::create([
                        'user_id' => $user->id,
                        'university_id' => $req->university_id
                    ]);
                }

                $result = [
                    'role'=> $user->role
                ];
                $response = [
                    'success' => true,
                    'data' => $result,
                    'message' => 'Success.'
                ];
                return response()->json($response, 200);
            }
        }
    }

    // User study details -->done
    public function userFieldStudy(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'subjects'=>'required'
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
            UserSubject::where('user_id',$user->id)->update(['is_update'=>0]);
            foreach($req->subjects as $subject){
                $userSubject = UserSubject::where([['user_id' , $user->id],['subject_id' , $subject]])->first();
                if($userSubject){
                    $userSubject->update(['is_update'=>1]);
                }else{
                    $userSubject = UserSubject::create([
                        'user_id' => $user->id,
                        'subject_id' => $subject
                    ]);
                }
            }
            UserSubject::where([['user_id',$user->id],['is_update',0]])->delete();

            $result = [
                'role'=> $user->role
            ];

            $response = [
                'success' => true,
                'data' => $result,
                'message' => 'Success.'
            ];
            return response()->json($response, 200);
        }        
    }

    // userNotification -->done
    public function userNotification(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'notification'=>'nullable|integer'
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
            $user_notify = array(
                'notification' => $req->notification,
            );
            User::whereId($user->id)->update($user_notify);
            
            $result = [
                'role'=> $user->role
            ];

            $response = [
                'success' => true,
                'data' => $result,
                'message' => 'Success.'
            ];
            return response()->json($response, 200);
        }
    }


    // login --> done
    public function login(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'email' => 'required|email', 
            'password' => 'required|min:6|string',
            'device_token' => 'required',
            'device_type' => 'required'
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 403);
        }

        if(Auth::attempt(['email'=>$req->email, 'password'=>$req->password])) {
            $user = Auth::user();
            if($user->status == 1){
                if($user->deleted_at == null){
                    $token = $user->createToken($user->email.'-'.now());
                    if(isset($user->first_name)){ $userName = true; }else{ $userName = false; }
                    if($user->subjects->count() > 0){ $userSubject = true; }else{ $userSubject = false; }
                    if(isset($user->notification)){ $userNotification = true; }else{ $userNotification = false; }
                    if(isset($req->device_token)){ 
                        User::whereId($user->id)->update(['device_token'=>$req->device_token]);
                    }
                    if(isset($req->device_type)){ 
                        User::whereId($user->id)->update(['device_type'=>$req->device_type]);
                    }

                    $result = [
                        'token'=> $token->accessToken,
                        'name' => $userName,
                        'subject' => $userSubject,
                        'notification' => $userNotification,
                        'role'=> $user->role
                    ];

                    $response = [
                        'success' => true,
                        'data' => $result,
                        'message' => 'Success.'
                    ];
                    return response()->json($response, 200);
                }else{
                    $response = [
                        'success' => false,
                        'data' => "Your account has been disabled.Please contact admin.",
                        'message' => 'Failure.'
                    ];
                    return response()->json($response, 403);
                }
            }else{
                $response = [
                    'success' => false,
                    'data' => "Please verify your account first",
                    'message' => 'Failure.'
                ];
                return response()->json($response, 403);
            }
        }else{
            $response = [
                'success' => false,
                'data' => "Wrong Credentials",
                'message' => 'Failure.'
            ];
            return response()->json($response, 403);
        }
    }

    public function forgetPassword(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>"required|email"
        ]);
        if($validator->fails()){
            return response()->json([
                'error'=> $validator->errors(),
                'status'=> 403
            ]);
        }

        $user = User::whereEmail($request->email)->first();
        if($user){
            $response = $this->broker()->sendResetLink(
                $this->credentials($request)
            );

            $result = [
                'success' => true,
                'data' => "Reset password link sent to your email.",
                'message' => 'Success.'
            ];
            return response()->json($result, 200);
        }else{
            return response()->json(['status' => 'failure', 'message' => 'User Not Found !'], 403);
        }
    }

    public function broker()
    {
        return Password::broker();
    }

    protected function credentials(Request $request)
    {
        return $request->only('email');
    }

    public function success(Request $req){
        // modify
        Withdraw::whereId(1)->update(['status'=>2]);
        return response()->json($req, 200);
    }
}
