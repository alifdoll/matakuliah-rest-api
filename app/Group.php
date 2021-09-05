<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;

class Group extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_mk';

    public function lecture()
    {
        return $this->belongsTo('App\Lecture');
    }
}
