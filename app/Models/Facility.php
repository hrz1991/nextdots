<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = 'facility';

    public function properties()
    {
        return $this->belongsToMany('App\Property');
    }
}