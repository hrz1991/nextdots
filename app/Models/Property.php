<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    public function state()
    {
        return $this->hasOne('App\Models\State', 'id');
    }

    public function facilities()
    {
        return $this->belongsToMany('App\Models\Facilities');
    }
}
