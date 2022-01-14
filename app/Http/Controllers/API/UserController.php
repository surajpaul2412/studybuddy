<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use App\Models\College;
use App\Models\Follow;
use App\Models\StudentDetail;
use App\Models\TutorDetail;
use App\Models\User;
use App\Models\Visitor;
use App\Models\UserSubject;
use App\Models\UserUniversity;
use App\Models\Notification;
use Carbon\carbon;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Validator;

class UserController extends Controller {
	public function profileDetails(Request $req) {
		$user = Auth::user();
		if ($user) {
			$user = getUserDetails($user);
			return $this->sendResponse($user, "Successful.");
		} else {
			$error = "User Not Found.";
			return $this->sendError($error, "Failure.");
		}
	}

	public function userAccountUpdate(Request $req) {
		$user = Auth::user();
		if ($user) {
			if ($user->role->slug == "student") {
				$validator = Validator::make($req->all(), [
					'first_name' => 'required|string|min:2|max:255',
					'last_name' => "nullable|string|min:2|max:255",
					'email' => "required|email|unique:users,email," . $user->id,
					'date_of_birth' => 'date|before:now|nullable',
					'country' => 'required|string|min:2|max:255',
					'city' => 'required|string|min:2|max:255',
					'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users,mobile,' . $user->id,
					'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
					'notification' => 'nullable|integer',
					'current_password' => 'nullable|min:6|string|required_with:new_password',
					'new_password' => 'nullable|min:6|string|required_with:current_password',
					'college_id' => 'integer|required',
					'gender' => 'required|string',
					'headline' => 'string|required|min:3',
					'introduction' => 'string|required|min:3',
					'native_language' => 'nullable|integer',
					'secondary_language' => 'nullable|integer',
					'secondary_language_level' => 'nullable|integer',
					'latitude' => 'nullable|string|min:3|max:255',
					'longitude' => 'nullable|string|min:3|max:255',
					'address' => 'nullable|string|min:3|max:255',
					'subjects' => 'required',
				]);
				if ($validator->fails()) {
					$response = [
						'success' => false,
						'data' => '',
						'message' => $validator->errors()->first(),
					];
					return response()->json($response, 403);
				}

				if (isset($req->current_password)) {
					if (Hash::check($req->current_password, $user->password)) {
						$image_name = $user->avatar;
						$image = $req->file('avatar');
						if ($image != '') {
							$image_name = rand() . '.' . $image->getClientOriginalExtension();
							$image->move(public_path('uploads/avatar'), $image_name);
						}

						$student_data = array(
							'first_name' => $req->first_name,
							'last_name' => $req->last_name,
							'email' => $req->email,
							'date_of_birth' => $req->date_of_birth,
							'country' => $req->country,
							'city' => $req->city,
							'mobile' => $req->mobile,
							'avatar' => $image_name,
							'password' => bcrypt($req->new_password),
							'notification' => $req->notification,
						);
						User::whereId($user->id)->update($student_data);

						$student_details_data = array(
							'college_id' => $req->college_id,
							'gender' => $req->gender,
							'headline' => $req->headline,
							'introduction' => $req->introduction,
							'native_language' => $req->native_language,
							'secondary_language' => $req->secondary_language,
							'secondary_language_level' => $req->secondary_language_level,
							'latitude' => $req->latitude,
							'longitude' => $req->longitude,
							'address' => $req->address,
						);
						StudentDetail::whereUserId($user->id)->update($student_details_data);

						$universityId = College::whereId($req->college_id)->pluck('university_id')->first();
						$userUniversity = array(
							'user_id' => $user->id,
							'university_id' => $universityId,
						);
						UserUniversity::whereUserId($user->id)->update($userUniversity);

						UserSubject::where('user_id', $user->id)->update(['is_update' => 0]);
						foreach ($req->subjects as $subject) {
							$userSubject = UserSubject::where([['user_id', $user->id], ['subject_id', $subject]])->first();
							if ($userSubject) {
								$userSubject->update(['is_update' => 1]);
							} else {
								$userSubject = UserSubject::create([
									'user_id' => $user->id,
									'subject_id' => $subject,
								]);
							}
						}
						UserSubject::where([['user_id', $user->id], ['is_update', 0]])->delete();

						$user = getUserDetails($user);
						return $this->sendResponse($user, "Successful.");
					} else {
						return response()->json(['status' => 'failure', 'message' => 'Current Password is incorrect'], 403);
					}
				} else {
					// If password not changed
					$image_name = $user->avatar;
					$image = $req->file('avatar');
					if ($image != '') {
						$image_name = rand() . '.' . $image->getClientOriginalExtension();
						$image->move(public_path('uploads/avatar'), $image_name);
					}

					$student_data = array(
						'first_name' => $req->first_name,
						'last_name' => $req->last_name,
						'email' => $req->email,
						'date_of_birth' => $req->date_of_birth,
						'country' => $req->country,
						'city' => $req->city,
						'mobile' => $req->mobile,
						'avatar' => $image_name,
						'notification' => $req->notification,
					);
					User::whereId($user->id)->update($student_data);

					$student_details_data = array(
						'college_id' => $req->college_id,
						'gender' => $req->gender,
						'headline' => $req->headline,
						'introduction' => $req->introduction,
						'native_language' => $req->native_language,
						'secondary_language' => $req->secondary_language,
						'secondary_language_level' => $req->secondary_language_level,
						'latitude' => $req->latitude,
						'longitude' => $req->longitude,
						'address' => $req->address,
					);
					StudentDetail::whereUserId($user->id)->update($student_details_data);

					$universityId = College::whereId($req->college_id)->pluck('university_id')->first();
					$userUniversity = array(
						'user_id' => $user->id,
						'university_id' => $universityId,
					);
					UserUniversity::whereUserId($user->id)->update($userUniversity);

					UserSubject::where('user_id', $user->id)->update(['is_update' => 0]);
					foreach ($req->subjects as $subject) {
						$userSubject = UserSubject::where([['user_id', $user->id], ['subject_id', $subject]])->first();
						if ($userSubject) {
							$userSubject->update(['is_update' => 1]);
						} else {
							$userSubject = UserSubject::create([
								'user_id' => $user->id,
								'subject_id' => $subject,
							]);
						}
					}
					UserSubject::where([['user_id', $user->id], ['is_update', 0]])->delete();

					$user = getUserDetails($user);
					return $this->sendResponse($user, "Successful.");
				}
			} elseif ($user->role->slug == "tutor") {
				$validator = Validator::make($req->all(), [
					'first_name' => 'required|string|min:2|max:255',
					'last_name' => "nullable|string|min:2|max:255",
					'email' => "required|email|unique:users,email," . $user->id,
					'date_of_birth' => 'date|before:now|nullable',
					'country' => 'required|string|min:2|max:255',
					'city' => 'required|string|min:2|max:255',
					'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users,mobile,' . $user->id,
					'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
					'notification' => 'nullable|integer',
					'current_password' => 'nullable|min:6|string|required_with:new_password',
					'new_password' => 'nullable|min:6|string|required_with:current_password',
					'university_id' => 'integer|required',
					'gender' => 'required|string',
					'hour_rate' => 'nullable|numeric',
					'available_from' => 'nullable|string|date_format:h:i A',
					'available_to' => 'nullable|string|date_format:h:i A',
					'headline' => 'string|required|min:3',
					'introduction' => 'string|required|min:3',
					'native_language' => 'nullable|integer',
					'secondary_language' => 'nullable|integer',
					'secondary_language_level' => 'nullable|integer',
					'latitude' => 'nullable|string|min:3|max:255',
					'longitude' => 'nullable|string|min:3|max:255',
					'address' => 'nullable|string|min:3|max:255',
					'subjects' => 'required',
					'zoom' => 'nullable|string'
				]);
				if ($validator->fails()) {
					$response = [
						'success' => false,
						'data' => '',
						'message' => $validator->errors()->first(),
					];
					return response()->json($response, 403);
				}

				if (isset($req->current_password)) {
					if (Hash::check($req->current_password, $user->password)) {
						$image_name = $user->avatar;
						$image = $req->file('avatar');
						if ($image != '') {
							$image_name = rand() . '.' . $image->getClientOriginalExtension();
							$image->move(public_path('uploads/avatar'), $image_name);
						}

						$tutor_data = array(
							'first_name' => $req->first_name,
							'last_name' => $req->last_name,
							'email' => $req->email,
							'date_of_birth' => $req->date_of_birth,
							'country' => $req->country,
							'city' => $req->city,
							'mobile' => $req->mobile,
							'avatar' => $image_name,
							'password' => bcrypt($req->new_password),
							'notification' => $req->notification,
						);
						User::whereId($user->id)->update($tutor_data);

						$tutor_details_data = array(
							'gender' => $req->gender,
							'hour_rate' => $req->hour_rate,
							'available_from' => $req->available_from,
							'available_to' => $req->available_to,
							'headline' => $req->headline,
							'introduction' => $req->introduction,
							'native_language' => $req->native_language,
							'secondary_language' => $req->secondary_language,
							'secondary_language_level' => $req->secondary_language_level,
							'latitude' => $req->latitude,
							'longitude' => $req->longitude,
							'address' => $req->address,
							'zoom' => $req->zoom,
						);
						TutorDetail::whereUserId($user->id)->update($tutor_details_data);

						$userUniversity = array(
							'user_id' => $user->id,
							'university_id' => $req->university_id,
						);
						UserUniversity::whereUserId($user->id)->update($userUniversity);

						UserSubject::where('user_id', $user->id)->update(['is_update' => 0]);
						foreach ($req->subjects as $subject) {
							$userSubject = UserSubject::where([['user_id', $user->id], ['subject_id', $subject]])->first();
							if ($userSubject) {
								$userSubject->update(['is_update' => 1]);
							} else {
								$userSubject = UserSubject::create([
									'user_id' => $user->id,
									'subject_id' => $subject,
								]);
							}
						}
						UserSubject::where([['user_id', $user->id], ['is_update', 0]])->delete();

						$user = getUserDetails($user);
						return $this->sendResponse($user, "Successful.");
					} else {
						return response()->json(['status' => 'failure', 'message' => 'Current Password is incorrect'], 403);
					}
				} else {
					// dd("no password");
					$image_name = $user->avatar;
					$image = $req->file('avatar');
					if ($image != '') {
						$image_name = rand() . '.' . $image->getClientOriginalExtension();
						$image->move(public_path('uploads/avatar'), $image_name);
					}

					$tutor_data = array(
						'first_name' => $req->first_name,
						'last_name' => $req->last_name,
						'email' => $req->email,
						'date_of_birth' => $req->date_of_birth,
						'country' => $req->country,
						'city' => $req->city,
						'mobile' => $req->mobile,
						'avatar' => $image_name,
						'notification' => $req->notification,
					);
					User::whereId($user->id)->update($tutor_data);

					$tutor_details_data = array(
						'gender' => $req->gender,
						'hour_rate' => $req->hour_rate,
						'available_from' => $req->available_from,
						'available_to' => $req->available_to,
						'headline' => $req->headline,
						'introduction' => $req->introduction,
						'native_language' => $req->native_language,
						'secondary_language' => $req->secondary_language,
						'secondary_language_level' => $req->secondary_language_level,
						'latitude' => $req->latitude,
						'longitude' => $req->longitude,
						'address' => $req->address,
						'zoom' => $req->zoom,
					);
					TutorDetail::whereUserId($user->id)->update($tutor_details_data);

					$userUniversity = array(
						'user_id' => $user->id,
						'university_id' => $req->university_id,
					);
					UserUniversity::whereUserId($user->id)->update($userUniversity);

					UserSubject::where('user_id', $user->id)->update(['is_update' => 0]);
					foreach ($req->subjects as $subject) {
						$userSubject = UserSubject::where([['user_id', $user->id], ['subject_id', $subject]])->first();
						if ($userSubject) {
							$userSubject->update(['is_update' => 1]);
						} else {
							$userSubject = UserSubject::create([
								'user_id' => $user->id,
								'subject_id' => $subject,
							]);
						}
					}
					UserSubject::where([['user_id', $user->id], ['is_update', 0]])->delete();

					$user = getUserDetails($user);
					return $this->sendResponse($user, "Successful.");
				}
			} else {
				$error = "User Not Found.";
				return $this->sendError($error, "Failure.");
			}
		}
	}

	public function userMentionable() {
		$user = Auth::user();
		if ($user) {
			$user_university_id = $user->university->university_id;
			$users_with_same_uni = User::whereHas('university', function ($q) use ($user_university_id) {
				$q->whereUniversityId($user_university_id);
			})->paginate(15);

			return $this->sendResponse($users_with_same_uni, "Successful.");
		}
	}

	public function recommendations() {
		$user = Auth::user();
		if ($user) {
			$user_university_id = $user->university->university_id;
			$users = User::whereHas('university', function ($q) use ($user_university_id, $user) {
				$q->whereUniversityId($user_university_id)
					->where('user_id', '!=', $user->id);
			})->get();

			$data = [];
			foreach ($users as $key => $value) {
				$value['is_followed'] = Follow::whereUserId($value->id)->whereFollowingId($user->id)->whereIsFriend(1)->count();
				$value['is_requested'] = Follow::whereUserId($value->id)->whereFollowingId($user->id)->count();

				// Already Friend // User Blocked // Blocked By
				$friendship = Follow::whereUserId($user->id)->whereFollowingId($value->id)->whereIsFriend(1)->whereIsBlocked(0)->count();
				$blocked = Follow::whereUserId($user->id)->whereFollowingId($value->id)->whereIsBlocked(1)->count();
				$blocked_by = Follow::whereUserId($value->id)->whereFollowingId($user->id)->whereIsBlocked(1)->count();

				if (!$friendship && !$blocked && !$blocked_by) {
					$data[] = $value;
				}
			}

			return $this->sendResponse($data, "Successful.");
		}
	}

	public function follow($id) {
		$user = Auth::user();
		if ($user) {
			$is_followed = Follow::whereUserId($id)->whereFollowingId($user->id)->get();
			if (count($is_followed) > 0) {
				$result = "Already Followed";
				return $this->sendResponse($result, "Successful.");
			} else {
				$follow = Follow::insert(['user_id' => $id, 'following_id' => $user->id, 'is_friend' => 0, 'is_blocked' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

				return $this->sendResponse($follow, "Successful.");
			}
		}
	}

	public function unfollow($id) {
		$user = Auth::user();
		if ($user) {
			$is_followed = Follow::whereUserId($id)->whereFollowingId($user->id)->get();
			if (count($is_followed) > 0) {
				$follow = Follow::whereUserId($id)->whereFollowingId($user->id)->delete();
				return $this->sendResponse($follow, "Successful.");
			} else {
				$result = "Already Unfollowed";
				return $this->sendResponse($result, "Successful.");
			}
		}
	}

	public function acceptRequest($id) {
		$user = Auth::user();
		if ($user) {
			$requests = Follow::whereUserId($user->id)->whereFollowingId($id)->whereIsFriend(0)->first();
			if ($requests) {
				$follow = Follow::findOrFail($requests->id)->update(['is_friend' => 1, 'is_blocked' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

				return $this->sendResponse($follow, "Successful.");
			} else {
				$error = "request Not Found.";
				return $this->sendError($error, "Failure.");
			}
		}
	}

	public function denialRequest($id) {
		$user = Auth::user();
		if ($user) {
			$requests = Follow::whereUserId($user->id)->whereFollowingId($id)->whereIsFriend(0)->first();
			if ($requests) {
				$follow = Follow::whereUserId($user->id)->whereFollowingId($id)->whereIsFriend(0)->delete();
				return $this->sendResponse($follow, "Successful.");
			} else {
				$error = "request Not Found.";
				return $this->sendError($error, "Failure.");
			}
		}
	}

	public function requests() {
		$user = Auth::user();
		if ($user) {
			$requests = $user->whereHas('following', function ($q) use ($user) {
				$q->whereIsFriend(0)
					->where('user_id', $user->id);
			})->orderBy('created_at', 'desc')->get();
			return $this->sendResponse($requests, "Successful.");
		}
	}

	public function profile($id) {
		$user = User::findOrFail($id);
		$visitorId = Auth::user()->id;
		if($user->id != $visitorId){
			$visitorCheck = $this->visitorCheck($user, $visitorId);
		}

		if ($user) {
			$user = getUserDetails($user);
			$user['is_fav'] = Follow::whereUserId($id)->whereFollowingId($user->id)->whereIsBlocked(0)->whereIsFavourite(1)->count();
			return $this->sendResponse($user, "Successful.");
		}
	}

	public function visitorCheck($user, $visitorId){
		$visitorCount = Visitor::whereUserId($user->id)->whereVisitorId($visitorId)->count();
		if($visitorCount == 0){
			$data['user_id'] = $user->id;
			$data['visitor_id'] = $visitorId;
			Visitor::create($data);
			return true;
		}
	}

	public function blocklist() {
		$user = Auth::user();
		if ($user) {
			$blocklist = Follow::whereFollowingId($user->id)->whereIsBlocked(1)->with('user')->get();
			return $this->sendResponse($blocklist, "Successful.");
		}
	}

	public function block($id) {
		$user = Auth::user();
		if ($user) {
			$followed_by = Follow::whereUserId($user->id)->whereFollowingId($id)->count();
			$is_followed = Follow::whereUserId($id)->whereFollowingId($user->id)->count();

			if ($followed_by > 0 || $is_followed > 0) {
				Follow::whereUserId($user->id)->whereFollowingId($id)->update(['is_blocked' => 1,'is_friend' => 0,'is_favourite'=> 0]);
				Follow::whereUserId($id)->whereFollowingId($user->id)->update(['is_blocked' => 1,'is_friend' => 0,'is_favourite'=> 0]);
			} else {
				Follow::insert(['user_id' => $id, 'following_id' => $user->id, 'is_friend' => 0, 'is_blocked' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
			}

			$result = "User Blocked.";
			return $this->sendResponse($result, "Successful.");
		}
	}

	public function unblock($id) {
		$user = Auth::user();
		if ($user) {
			$followed_by = Follow::whereUserId($user->id)->whereFollowingId($id)->count();
			$is_followed = Follow::whereUserId($id)->whereFollowingId($user->id)->count();

			if ($followed_by > 0 || $is_followed > 0) {
				Follow::whereUserId($user->id)->whereFollowingId($id)->delete();
				Follow::whereUserId($id)->whereFollowingId($user->id)->delete();
			}

			$result = "User Unblocked.";
			return $this->sendResponse($result, "Successful.");
		}
	}

	public function listFavourites() {
		$user = Auth::user();
		if ($user) {
			$tutor = Follow::whereFollowingId($user->id)->whereIsFriend(1)->where('is_blocked', '!=', 1)->whereIsFavourite(1)->with('user', 'user.role', 'user.studentDetail', 'user.tutorDetail', 'user.subjects')
				->WhereHas('user.role', function ($q) {
					return $q->where('slug', 'tutor');
				})->get();

			$student = Follow::whereFollowingId($user->id)->whereIsFriend(1)->where('is_blocked', '!=', 1)->whereIsFavourite(1)->with('user', 'user.role', 'user.studentDetail', 'user.tutorDetail', 'user.subjects')
				->WhereHas('user.role', function ($q) {
					return $q->where('slug', 'student');
				})->get();

			$result = [
				'tutors' => $tutor,
				'students' => $student,
			];
			return $this->sendResponse($result, "Successful.");
		}
	}

	public function addFavourite($id) {
		$user = Auth::user();
		if ($user) {
			$is_friend = Follow::whereUserId($id)->whereFollowingId($user->id)->whereIsFriend(1)->where('is_blocked', '!=', 1)->count();
			if ($is_friend > 0) {
				$result = Follow::whereUserId($id)->whereFollowingId($user->id)->whereIsFriend(1)->where('is_blocked', '!=', 1)->update(['is_favourite' => 1]);

				$follower = Follow::whereUserId($id)->whereFollowingId($user->id)->whereIsFriend(1)->where('is_blocked', '!=', 1)->with('user', 'user.role', 'user.studentDetail', 'user.tutorDetail', 'user.subjects')->first();
				return $this->sendResponse($follower, "Successful.");
			} else {
				$error = "You are not friend with the user.";
				return $this->sendError($error, "Failure.");
			}
		}
	}

	public function removeFavourite($id) {
		$user = Auth::user();
		if ($user) {
			$result = Follow::whereUserId($id)->whereFollowingId($user->id)->whereIsFriend(1)->where('is_blocked', '!=', 1)->update(['is_favourite' => 0]);

			$follower = Follow::whereUserId($id)->whereFollowingId($user->id)->whereIsFriend(1)->where('is_blocked', '!=', 1)->with('user', 'user.role', 'user.studentDetail', 'user.tutorDetail', 'user.subjects')->first();
			return $this->sendResponse($follower, "Successful.");
		}
	}

	public function removeAllFavourites() {
		$user = Auth::user();
		if ($user) {
			$favs = Follow::whereFollowingId($user->id)->whereIsFriend(1)->where('is_blocked', '!=', 1)->get();
			foreach ($favs as $key => $fav) {
				Follow::whereId($fav->id)->update(['is_favourite' => 0]);
			}

			$result = "All users removed from Favourite.";
			return $this->sendResponse($result, "Successful.");
		}
	}

	public function follower() {
		$user = Auth::user();
		if ($user) {
			$follower = $user->followers()->where('is_friend', 1)->with('follower_list')->paginate(20);
			return $this->sendResponse($follower, "Successful.");
		}
	}

	public function following() {
		$user = Auth::user();
		if ($user) {
			$following = $user->following()->where('is_friend', 1)->with('user')->paginate(20);
			return $this->sendResponse($following, "Successful.");
		}
	}

	public function notification(){
		$user = Auth::user();
		if ($user) {
			$notifications = Notification::whereUserId($user->id)->orderBy('created_at', 'desc')->orderBy('id', 'desc')->with('user','session')->paginate(20);
			return $this->sendResponse($notifications, "Successful.");
		}
	}
}
