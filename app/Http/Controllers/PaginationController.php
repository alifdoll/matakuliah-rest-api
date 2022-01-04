<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $lecture = Lecture::with(['groups', 'groups.schedules'])->paginate(5);
            return  
        }
    }
}
