<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];


    
    public function roles() {
        return $this->belongsToMany('App\User');
    }
}
