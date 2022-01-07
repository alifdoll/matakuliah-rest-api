<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;
use App\Http\Resources\LectureResource;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $lecture = Lecture::with(['groups', 'groups.schedules'])->where('nama', 'like', "%{$search}%")->paginate(5);
            return LectureResource::collection($lecture);
        }
        $lecture = Lecture::with(['groups', 'groups.schedules'])->paginate(5);
        return LectureResource::collection($lecture);
    }

    public function schedule(Request $request)
    {
        if ($request->ajax()) {
            $lecture = Lecture::with(['groups', 'groups.schedules'])->paginate(5);
            if ($request->has('search')) {
                $search = $request->input('search');
                $lecture = Lecture::with(['groups', 'groups.schedules'])->where('nama', 'like', "%{$search}%")->paginate(5);
                $lecture->appends(["search" => $search]);
            }
            return view('schedule.schedule_data', compact('lecture'));
        } else {
            $lecture = Lecture::with(['groups', 'groups.schedules'])->paginate(5);
            return view('schedule.schedule', compact('lecture'));
        }
    }

    public function getSchedule(Request $request)
    {
        $test = $request->input('test');
        $lecture = Lecture::find($test);
        return $lecture->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    {
        //
    }
}
