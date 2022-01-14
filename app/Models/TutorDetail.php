<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TutorDetail extends Model
{
    protected $fillable = [
        'user_id','type','college_id','education','gender','headline','introduction','languages','location','zoom','hour_rate','available_from','available_to','latitude','longitude'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User');;
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
