<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BackpackItem extends Model
{
    protected $fillable = [
        'backpack_id', 'name'
    ];

    public function backpacks()
    {
        return $this->belongsTo('App\Models\Backpack');
    }
}
