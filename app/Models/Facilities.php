<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    protected $table = 'facilities';

    public function properties()
    {
        return $this->belongsToMany('App\Property');
    }
}