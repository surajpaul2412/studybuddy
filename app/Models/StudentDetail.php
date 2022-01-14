<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
	protected $fillable = [
        'user_id','college_id','date_of_birth','gender','headline','introduction','languages','location','latitude','longitude','deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');;
    }

    public function college()
    {
        return $this->belongsTo('App\Models\College','college_id');
    }

    public function nativeLanguage()
    {
        return $this->belongsTo('App\Models\Language','native_language');
    }

    public function secondaryLanguage()
    {
        return $this->belongsTo('App\Models\Language','secondary_language');
    }

    public function secondaryLanguageLevel()
    {
        return $this->belongsTo('App\Models\LanguageLevel','secondary_language_level');
    }
}
