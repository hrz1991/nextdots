<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }

    public function facilities()
    {
        return $this->belongsToMany('App\Models\Facilities');
    }
}
