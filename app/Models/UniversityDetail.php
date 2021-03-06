<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityDetail extends Model
{
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
