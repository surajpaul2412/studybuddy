<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{   
    /* tutor status : 0=>pending,1=accepted,2=reject */
    /* creator status : 0=>pending,1=accepted,2=reject */
    /* status : 0=>pending,1=>accepted,2=started,3=completed,4=>cancelled */

    protected $fillable = [
        'name','created_by','tutor_id','message','description','subject_id','type','start_date_time','end_date_time','income','latitude','longitude','address','is_organized_by','backpack_id','tutor_status','creator_status','status','tutor_ready','creator_ready','otp','tutor_otp_verified','creator_otp_verified','extention_status','extention_count'
    ];

    static function createUserSession($data)
    {   
        return Session::create([
            'name' => $data['name']??"",
            'created_by' => $data['created_by']??0,
            'tutor_id' => $data['tutor_id']??0,
            'message' => $data['message']??"",
            'description' => $data['description']??"",
            'subject_id' => $data['subject_id']??0,
            'type' => isset($data['type'])?(int)$data['type']:0,
            'start_date_time' => $data['start_date_time']??date('Y-m-d H:i:s'),
            'end_date_time' => $data['end_date_time']??date('Y-m-d H:i:s'),
            'income' => $data['income']??0,
            'latitude' => $data['latitude']??null,
            'longitude' => $data['longitude']??null,
            'address' => $data['address']??null,
            'is_organized_by' => $data['is_organized_by']??null,
            'backpack_id' => $data['backpack_id']??null,            
            'tutor_status' => $data['tutor_status']??0,
            'creator_status' => $data['creator_status']??0,
            'status' => $data['status']??0,
        ]);
    }

    public function author()
    {
        return $this->belongsTo('App\Models\User','created_by');
    }

    public function tutor()
    {
        return $this->belongsTo('App\Models\User','tutor_id');
    }

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }

    public function attendance()
    {
        return $this->hasMany('App\Models\SessionAttendance');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'session_attendances');
    }

    public function backpack()
    {
        return $this->belongsTo('App\Models\Backpack');
    }

    public function notification()
    {
        return $this->belongsTo('App\Models\Notification');
    }
}
