<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->group

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('forgetPassword', 'AuthController@forgetPassword');

// webhook resp
Route::post('/withdraw/success', 'AuthController@success');//delete

// Stripe Connect Webhook
Route::get('stripe/connect', 'API\StripeController@connect');//delete

Route::middleware('auth:api')->group(function() {
	// User Related Detail
	Route::post('studentDetail', 'AuthController@studentDetail');
	Route::post('tutorDetail', 'AuthController@tutorDetail');
	Route::post('userFieldStudy', 'AuthController@userFieldStudy');
	Route::post('userNotification', 'AuthController@userNotification');
	Route::post('user/profileDetails', 'API\UserController@profileDetails');
	Route::post('user/accountUpdate', 'API\UserController@userAccountUpdate');
	// Subjects
	Route::get('getAllSubjects','API\SubjectController@getAllSubjects');
	// Universities
	Route::get('getAllUniversities','API\UniversityController@getAllUniversities');
	// All colleges
	Route::get('getAllColleges','API\UniversityController@getAllColleges');
	// User Posts
	Route::get('getAllPostsByUserId','API\PostController@getAllPostsByUserId');
	// All languages
	Route::get('getAllLanguages','API\BaseController@getAllLanguages');
	Route::get('getAllLanguageLevels','API\BaseController@getAllLanguageLevels');
	// Mentionable
	Route::get('userMentionable','API\UserController@userMentionable');

	// posts
	Route::group(['prefix'=>'post'], function(){
		Route::post('addCommentReply/{id}','API\PostController@addCommentReply');
		Route::get('deleteCommentReply/{id}','API\PostController@deleteCommentReply');
		Route::get('favPosts','API\PostController@favPost');
		Route::get('/{id}/addFav','API\PostController@addFav');
		Route::get('/{id}/removeFav','API\PostController@removeFav');
		Route::get('/removeAllFav','API\PostController@removeAllFav');
		Route::get('allPosts','API\PostController@allPosts');
		Route::post('create','API\PostController@create');
		Route::get('myPosts','API\PostController@myPosts');
		Route::post('delete/{id}','API\PostController@delete');
		Route::post('/{id}/update','API\PostController@update');
		Route::get('/{id}/like','API\PostController@like');
		Route::post('/{id}/addComment','API\PostController@addComment');
		Route::post('deleteComment/{id}','API\PostController@deleteComment');
		Route::get('/{id}/join','API\PostController@join');
		Route::get('/{id}/disjoin','API\PostController@disjoin');
		Route::get('/{id}','API\PostController@show');
	});

	// Follow / Unfollow
	Route::group(['prefix'=>'user'], function(){
		Route::get('/recommendation','API\UserController@recommendations');
		Route::get('/follower','API\UserController@follower');
		Route::get('/following','API\UserController@following');
		Route::get('/{id}/follow','API\UserController@follow');
		Route::get('/{id}/unfollow','API\UserController@unfollow');
		Route::get('/{id}/acceptRequest','API\UserController@acceptRequest');
		Route::get('/{id}/denialRequest','API\UserController@denialRequest');
		Route::get('/blocklist','API\UserController@blocklist');
		Route::get('/{id}/block','API\UserController@block');
		Route::get('/{id}/unblock','API\UserController@unblock');
		Route::get('/requests','API\UserController@requests');
		Route::get('/{id}/profile','API\UserController@profile');
		Route::get('/listFavourites','API\UserController@listFavourites');
		Route::get('/{id}/addFavourite','API\UserController@addFavourite');
		Route::get('/{id}/removeFavourite','API\UserController@removeFavourite');
		Route::get('/removeAllFavourites','API\UserController@removeAllFavourites');
		Route::get('/notification','API\UserController@notification');
	});

	// Sessions
	Route::group(['prefix'=>'session'], function(){
		Route::get('/allSessions','API\SessionController@index');
		Route::get('/{id}/detail','API\SessionController@show');
		Route::get('/{id}/interested','API\SessionController@interested');
		Route::get('/{id}/notInterested','API\SessionController@notInterested');

		Route::get('/calendar','API\SessionController@calendar');
		Route::get('/tutor/calendar','API\SessionController@tutorCalendar');
		Route::post('/{id}/review','API\SessionController@review');
		// student
		Route::post('/request/list','API\SessionController@requestList');
		Route::post('/request/perDate','API\SessionController@requestPerDate');
		Route::post('/create','API\SessionController@create');
		// tutor
		Route::post('/event/list','API\SessionController@eventList');
		Route::post('/event/perDate','API\SessionController@eventPerDate');
		Route::post('/update/request','API\SessionController@updateRequest');
		// OTP
		Route::get('/{id}/request/otp','API\SessionController@requestOtp');
		Route::post('/{id}/verify/otp','API\SessionController@verifyOtp');
		// Timer
		Route::get('/{id}/timer','API\SessionController@timer');
		// Extend
		Route::get('/{id}/extend/request','API\SessionController@extendRequest');
		Route::post('/{id}/extend/update','API\SessionController@extendUpdate');
	});

	// Backpack
	Route::group(['prefix'=>'backpack'], function(){
		Route::post('store','API\BackpackController@store');
		Route::get('list','API\BackpackController@list');
		Route::get('/{id}/items','API\BackpackController@items');
		Route::get('/{id}/items','API\BackpackController@items');
		Route::get('/item/{id}/destroy','API\BackpackController@destroy');
		Route::get('/list/{id}/destroy','API\BackpackController@delete');
		Route::post('/{id}/update','API\BackpackController@update');
	});

	// page template
	Route::get('pages','API\TemplateController@index');

	// Notification
	Route::get('/notification','API\NotificationController@index');
	Route::get('/notification/{id}/read','API\NotificationController@read');

	// Search
	Route::post('search','API\SearchController@index');

	// Card
	Route::group(['prefix'=>'card'], function(){
		Route::get('/','API\CardController@index');
		Route::post('/add','API\CardController@add');
		Route::post('/remove','API\CardController@remove');
	});

	// Wallet
	Route::group(['prefix'=>'wallet_transactions'], function(){
		Route::get('/','API\WalletController@index');
		Route::post('/add','API\WalletController@add');
	});

	// Withdraw
	Route::group(['prefix'=>'withdraw'], function(){
		Route::get('/','API\WithdrawController@index');
		Route::post('/request','API\WithdrawController@request');
	});

	// Stripe
	Route::group(['prefix'=>'stripe'], function(){
		Route::post('/tutorConnect','API\StripeController@tutorConnect');
	});

	// Stats
	Route::group(['prefix'=>'stats'], function(){
		Route::get('/chart','API\StatsController@chart');
		Route::get('/graph','API\StatsController@graph');
		Route::get('/visitor','API\StatsController@visitor');
	});

    // Chat Route
    Route::prefix('chat')->group(function(){
        Route::get('users-list', 'API\ChatController@getUserList');
        Route::post('delete', 'API\ChatController@deleteChat');
        Route::delete('delete-message/{id}', 'API\ChatController@deleteMessage');
        Route::post('file-upload', 'API\ChatController@uploadImageAndDocs');
    });

    Route::prefix('notification')->group(function(){
        Route::post('preference', 'API\NotificationController@preference');
        Route::get('preference/list', 'API\NotificationController@preferenceList');
    });
});

Route::prefix('stripe/connect')->group(function(){
    Route::get('{id}', 'API\StripeConnect@createConnectLink')->name('stripe.redirect');
    Route::get('save/{token}', 'API\StripeConnect@saveStripeAccount')->name('stripe.save');
});





// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
