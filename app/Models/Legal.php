<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    protected $fillable = [
        'thumbnail','title','description','slug','is_active','meta_title','meta_keyword','meta_description'
    ];
}
