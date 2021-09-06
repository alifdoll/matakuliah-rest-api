<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class Schedule extends Model
{
    public $timestamps = false;
    // protected $primaryKey = 'id_schedule';

    public function group()
    {
        return $this->belongsTo('App\Group', 'id_kp', 'id_kp');
    }
}
