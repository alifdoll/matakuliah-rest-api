<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;

class Group extends Model
{
    public $timestamps = false;

    public function schedules()
    {
        return $this->hasMany('App\Schedule', 'id_kp', 'kode');
    }

    public function lecture() {
        return $this->belongsTo('App\Lecture', 'id_mk');
    }
}
