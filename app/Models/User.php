<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Services\Fcm\FcmServiceI;

class User extends Authenticatable implements FcmServiceI
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'name', 'username', 'email', 'mobile', 'country', 'city', 'password','avg_rating', 'status', 'avatar','date_of_birth','deleted_at','stripe_cust_id','stripe_acc_id','device_token','device_type'
    ];

    protected $appends = ['reviews'];

    public function getFullNameAttribute() {
        $res = '';
        $firstName = $this->first_name??"";
        $lastName = $this->last_name??"";
        $res = "$firstName $lastName";
        return $res;
    }

    public function getWalletBalanceAttribute() {
        $res = 0;
        $transaction = WalletTransaction::where('user_id',$this->id)->latest()->first();
        if ($transaction) {
            $res = (float)$transaction->balance_amount;
        }
        return $res;
    }

    public function getReviewsAttribute() {
        $res = '';
        $reviews = Review::whereUserId($this->id)->orderBy('created_at','desc')->get();
        $res = $reviews;
        return $res;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function studentDetail()
    {
        return $this->hasOne('App\Models\StudentDetail');
    }

    public function tutorDetail()
    {
        return $this->hasOne('App\Models\TutorDetail');
    }

    public function universityDetail()
    {
        return $this->hasOne('App\Models\UniversityDetail');
    }

    public function subjects()
    {
        return $this->hasMany('App\Models\UserSubject');
    }

    public function colleges()
    {
        return $this->hasMany('App\Models\College','university_id');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function backpacks()
    {
        return $this->hasMany('App\Models\Backpack');
    }

    public function university()
    {
        return $this->hasOne('App\Models\UserUniversity');
    }

    public function cards()
    {
        return $this->hasMany('App\Models\Card');
    }

    public function withdrawRequests()
    {
        return $this->hasMany('App\Models\Withdraw');
    }

    public function defaultCard()
    {
        return $this->hasOne('App\Models\Card')->where('is_default',1);
    }

    public function followers()
    {
        return $this->hasMany('App\Models\Follow')->where('is_blocked',0);
    }

    public function following()
    {
        return $this->hasMany('App\Models\Follow','following_id')->where('is_blocked',0);
    }

    public function no_of_follower()
    {
        return $this->hasMany('App\Models\Follow')->where('is_blocked',0)->where('is_friend',1);
    }

    public function no_of_following()
    {
        return $this->hasMany('App\Models\Follow','following_id')->where('is_blocked',0)->where('is_friend',1);
    }

    public function sessions()
    {
        return $this->belongsToMany(Session::class, 'session_attendances');
    }

    public function tutorAcceptedSessions()
    {
        return $this->hasMany('App\Models\Session','tutor_id')->where('tutor_status',1);
    }

    public function notifications()
    {
        return $this->hasMany('App\Models\Notification');
    }

    public function notificationPreference()
    {
        return $this->hasOne('App\Models\UserNotificationPreference');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function visitors()
    {
        return $this->hasMany('App\Models\Visitor');
    }

    /*
     * implement in user model and return device type
     *
     * @return string|null
     */
    public function getDeviceType():?string{
        return $this->device_type;
    }

     /**
     * implement in user model and return device fcm token
     *
     * @return string|null
     */
    public function getDeviceToken():?string{
        return $this->device_token;
    }
}
