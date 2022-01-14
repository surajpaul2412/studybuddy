<?php

use Illuminate\Support\Facades\Route;
use App\Models\Legal;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
*FRONTEND*
*/ 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verifyUser/{id}', 'AuthController@verifyUser')->name('verifyUser');

Route::get('/', function () { return view('welcome');})->name('/');
Route::get('/about', function () { return view('frontend.about');})->name('about');
Route::get('/contact', function () { return view('frontend.contact');})->name('contact');
Route::get('/become-student', function () { return view('frontend.become-student');})->name('become-student');
Route::get('/become-tutor', function () { return view('frontend.become-tutor');})->name('become-tutor');
Route::get('/legal', function () { return view('frontend.legal');})->name('legal');
Route::get('/legal-detail/{legal}', function (Legal $legal) { 
    return view('frontend.legal-detail',compact('legal'));
})->name('legal-detail');
Route::get('/pricing', function () { return view('frontend.pricing');})->name('pricing');
Route::get('/university', function () { return view('frontend.university');})->name('university');
// Interactions
Route::post('contact-form','FrontendController@contact')->name('contact-form');
Route::post('student-register','FrontendController@studentRegister')->name('student-register');
Route::post('tutor-register','FrontendController@tutorRegister')->name('tutor-register');
Route::post('newsletter','FrontendController@newsletter')->name('newsletter');

/*
**BACKEND**
*/
/* admin panel routes*/
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    // dashboard
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    // university
    Route::get('university/{id}/colleges','UniversityController@getAllUniversityColleges')->name('admin.getAllUniversityColleges');
    Route::get('university/{id}/activate','UniversityController@activate')->name('university.activate');
    Route::get('university/{id}/deactivate','UniversityController@deactivate')->name('university.deactivate');
    Route::get('university/{id}/showcreate','UniversityController@showCreate')->name('university.showCreate');
    Route::post('university/{id}/showStore','UniversityController@showStore')->name('university.showStore');
    Route::get('university/{id}/{data}/showEdit','UniversityController@showEdit')->name('university.showEdit');
    Route::patch('university/{id}/showUpdate','UniversityController@showUpdate')->name('university.showUpdate');
    Route::get('university/showActivate/{id}/{data}','UniversityController@showActivate')->name('university.showActivate');
    Route::get('university/showDeactivate/{id}/{data}','UniversityController@showDeactivate')->name('university.showDeactivate');
    Route::get('university/{id}/{data}/showStudents','UniversityController@showStudents')->name('university.showStudents');
    Route::resource('university','UniversityController');
    // subject
    Route::get('getAllSubjects','SubjectController@getAllSubjects')->name('admin.getAllSubjects');
    Route::get('subject/destroy/{id}','SubjectController@destroy')->name('admin.subject.destroy');
    Route::get('subject/activate/{id}','SubjectController@activate')->name('admin.subject.activate');
    Route::resource('subject','SubjectController');
    // Page Templating
    Route::resource('page','PageController');
    // Legal documents
    Route::resource('legal','LegalController');
    // Testimonial
    Route::resource('testimonial','TestimonialController');

    Route::get('user/destroy/{id}','UserController@destroy')->name('admin.user.destroy');
    Route::get('user/activate/{id}','UserController@activate')->name('admin.user.activate');
    // Users Section
    Route::get('adminUsers', 'UserController@getUsersForAdmin')->name('adminUsers');
    Route::resource('users','UserController');
    Route::post('users/search', 'UserController@search')->name('users.search');
    // Session Routes
    Route::get('session/detail/{id}','SessionController@detail')->name('session.detail');
    Route::get('session/destroy/{id}','SessionController@destroy')->name('session.destroy');
    Route::resource('session','SessionController')->except('create','store','edit','update');
    // Withdrawal
    Route::get('withdraw','WithdrawController@index')->name('withdraw.index');
});

// University panel routes
Route::group(['as'=>'university.','prefix'=>'university','namespace'=>'University','middleware'=>['auth','university']], function(){
    // University Dashboard
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    // college Management
    Route::get('getAllCollages','CollegeController@getAllCollages')->name('university.getAllCollages');
    Route::get('college/destroy/{id}','CollegeController@destroy')->name('admin.college.destroy');
    Route::get('college/activate/{id}','CollegeController@activate')->name('admin.college.activate');
    Route::resource('college','CollegeController');
    // Session Management
    Route::get('session/detail/{id}','SessionController@detail')->name('session.detail');
    Route::get('session/destroy/{id}','SessionController@destroy')->name('admin.session.destroy');
    Route::resource('session','SessionController');
});

// Firebase test
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/save-token', [App\Http\Controllers\HomeController::class, 'saveToken'])->name('save-token');
Route::post('/send-notification', [App\Http\Controllers\HomeController::class, 'sendNotification'])->name('send.notification');
