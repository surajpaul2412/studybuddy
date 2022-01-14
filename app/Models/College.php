<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [
        'name','university_id','deleted_at'
    ];

    public function university()
    {
        return $this->belongsTo('App\Models\User','university_id');
    }

    public function students()
    {
        return $this->hasMany('App\Models\StudentDetail');
    }
}
