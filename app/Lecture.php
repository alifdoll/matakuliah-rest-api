<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\Schedule;

class Lecture extends Model
{
    protected $table = 'courses';
    public $timestamps = false;


    public function groups()
    {
        return $this->hasMany('App\Group');
    }
}
