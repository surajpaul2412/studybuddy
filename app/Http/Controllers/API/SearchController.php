<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Subject;
use Validator;
use Auth;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {   
        $rules = [
            'search'=> 'nullable|string',
            'price_per_hour_start'=> "nullable|numeric",
            'price_per_hour_end'=> "nullable|numeric",
            'tutor_type'=> 'nullable|string|in:college,private',
            'subjects'=> 'nullable|string',
            'days'=> 'nullable|string',
            'sort_by'=> 'nullable|string|in:price,rating',
            'sort_by_type'=> 'nullable|string|in:asc,desc',
            'radius'=>'nullable|integer|min:1,max:50'
        ];
        if (isset($req->available_from) || isset($req->available_to)) {
            $rules['available_from'] = 'required|string|date_format:h:i A';
            $rules['available_to'] = 'required|string|date_format:h:i A';
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

        $user = Auth::user();
        $latitude= isset($user->studentDetail->latitude)?(float)$user->studentDetail->latitude:0;
        $longitude= isset($user->studentDetail->longitude)?(float)$user->studentDetail->longitude:0;
        $distance = isset($req->radius)?(float)$req->radius:1000000;
        $sortBy = $req->sort_by??'id';
        $sortByType = $req->sort_by_type??'desc';
        if($user){
            $tutors = User::whereRoleId(3)
            ->leftJoin('tutor_details', 'users.id', '=', 'tutor_details.user_id')
            ->leftJoin('reviews', 'users.id', '=', 'reviews.reviewer_id')
            ->where(function ($query) use ($req) {
                $query->where('first_name', 'LIKE', '%' . $req->search . '%')
                ->orWhere('last_name', 'LIKE', '%' . $req->search . '%')
                ->orWhere(DB::raw("CONCAT(users.first_name,' ',users.last_name)"), 'LIKE', "%$req->search%")
                ->orWhere('email', 'LIKE', '%' . $req->search . '%')
                ->orWhere('country', 'LIKE', '%' . $req->search . '%')
                ->orWhere('city', 'LIKE', '%' . $req->search . '%')
                ->orWhereHas('subjects.subject', function ($r) use ($req) {
                    return $r->where('name', 'LIKE', '%' . $req->search . '%');
                });
            });
            if (isset($user->university->university_id)) {
                $tutors = $tutors->WhereHas('university', function ($q) use ($user) {
                    return $q->where('university_id', $user->university->university_id);
                });
            }    
                
            if (isset($req->price_per_hour_start) && !empty($req->price_per_hour_start)) {
                $tutors = $tutors->whereHas('tutorDetail', function($q) use ($req){
                    $q->where('hour_rate', '>=', $req->price_per_hour_start);
                });
            }
            if (isset($req->price_per_hour_end) && !empty($req->price_per_hour_end)) {
                $tutors = $tutors->whereHas('tutorDetail', function($q) use ($req){
                    $q->where('hour_rate', '<=', $req->price_per_hour_end);
                });
            }

            if (isset($req->available_from,$req->available_to) && !empty($req->available_from) && !empty($req->available_to)) {
                $days = [];
                $dayArr = isset($req->days)?explode(',', $req->days):[];
                if (!empty($dayArr) && array_diff($dayArr, ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'])) {
                    return $this->sendError("Invalid day selected!","Failure.");
                }
                if (!empty($dayArr)) {
                    foreach ($dayArr as $day) {
                        $days[] = date('Y-m-d', strtotime("$day this week"));
                    }
                }
                if (empty($days)) {
                    $days[] = date('Y-m-d');
                }
                $tutors = $tutors->whereDoesnthave('tutorAcceptedSessions', function($q) use ($req,$days){
                    foreach($days as $day){
                        $availableFrom = date('Y-m-d H:i:s', strtotime($day." ".$req->available_from));
                        $availableTo = date('Y-m-d H:i:s', strtotime($day." ".$req->available_to));
                        $q->where(function ($query) use ($availableFrom,$availableTo) {
                            $query->where(function ($query2) use ($availableFrom,$availableTo) {
                                $query2->where('start_date_time','<=', $availableFrom)->where('end_date_time','>=', $availableFrom);
                            })->orWhere(function ($query3) use ($availableFrom,$availableTo) {
                                $query3->where('start_date_time','<=', $availableTo)->where('end_date_time','>=', $availableTo);
                            });
                        });
                    }
                });
            }


            // if (isset($req->available_from) && !empty($req->available_from)) {
            //     $tutors = $tutors->has('tutorDetail')->whereHas('tutorDetail', function($q) use ($req){
            //         $q->whereRaw('CAST(available_from As Time) >= CAST(? As Time)', date('H:i',strtotime($req->available_from)));
            //         // $q->whereDate('available_from', '>=', date('H:i:s',strtotime($req->available_from)));
            //     });
            // }
            // if (isset($req->available_to) && !empty($req->available_to)) {
            //     $tutors = $tutors->has('tutorDetail')->whereHas('tutorDetail', function($q) use ($req){
            //         $q->whereRaw('CAST(? As Time) <= CAST(available_to As Time)', date('H:i',strtotime($req->available_to)));
            //         // $q->whereDate('available_to', '<=', date('H:i:s',strtotime($req->available_to)));
            //     });
            // }
            if (isset($req->tutor_type) && !empty($req->tutor_type)) {
                $tutors = $tutors->whereHas('tutorDetail', function($q) use ($req){
                    $q->where('type', $req->tutor_type=="college"?0:1);
                });
            }
            if (isset($req->subjects) && !empty($req->subjects)) {
                $subjectsArr = explode(',',$req->subjects);
                $filterSubs = Subject::find($subjectsArr);
                $tutors = $tutors->whereHas('subjects', function($q) use ($req,$filterSubs){
                    $q->whereIn('subject_id', $filterSubs);
                });
            }
               
            $tutors = $tutors->with('tutorDetail','subjects.subject','tutorDetail.nativeLanguage','tutorDetail.secondaryLanguage','tutorDetail.secondaryLanguageLevel');
            if ($sortBy == 'price') {
                $tutors = $tutors->orderBy('tutor_details.hour_rate', $sortByType);
            }elseif ($sortBy == 'rating') {
                $tutors = $tutors->orderBy('avg_rating', $sortByType);
            }  
            $tutors = $tutors->select(DB::raw('users.*, ( 6367 * acos( cos( radians(' . $latitude . ') ) * cos( radians( tutor_details.latitude ) ) * cos( radians( tutor_details.longitude ) - radians(' . $longitude . ') ) + sin( radians(' . $latitude . ') ) * sin( radians( tutor_details.latitude ) ) ) ) AS distance'))->having('distance', '<=', $distance)->paginate(20);

            $students = User::whereRoleId(4)->where(function ($query) use ($req) {
                $query->where('first_name', 'LIKE', '%' . $req->search . '%')
                ->orWhere('last_name', 'LIKE', '%' . $req->search . '%')
                ->orWhere(DB::raw("CONCAT(users.first_name,' ',users.last_name)"), 'LIKE', "%$req->search%")
                ->orWhere('email', 'LIKE', '%' . $req->search . '%')
                ->orWhere('country', 'LIKE', '%' . $req->search . '%')
                ->orWhere('city', 'LIKE', '%' . $req->search . '%')
                ->orWhereHas('subjects.subject', function ($r) use ($req) {
                    return $r->where('name', 'LIKE', '%' . $req->search . '%');
                });
            });
                
            if (isset($user->university->university_id)) {
                $students = $students->WhereHas('university', function ($q) use ($user) {
                    return $q->where('university_id', $user->university->university_id);
                });
            }
            if (isset($req->subjects) && !empty($req->subjects)) {
                $subjectsArr = explode(',',$req->subjects);
                $filterSubs = Subject::find($subjectsArr);
                $students = $students->whereHas('subjects', function($q) use ($req,$filterSubs){
                    $q->whereIn('subject_id', $filterSubs);
                });
            }    
            $students = $students->with('studentDetail','subjects.subject','studentDetail.nativeLanguage','studentDetail.secondaryLanguage','studentDetail.secondaryLanguageLevel','studentDetail.college')->paginate(20);

            $post = Post::whereUniversityId($user->id)
                    ->orWhere('content', 'LIKE', '%' . $req->search . '%');
            $post = $post->with('user','location','media','mentions.user','comments.user','likes.user','joins.user')
                    ->withCount('likes','comments','joins')
                    ->paginate(20);

            $result = [
                'tutor' => $tutors,
                'student' => $students,
                'post' => $post
            ];
            return $this->sendResponse($result,"Successful.");
        }
    }
}
