<?php

namespace App\Http\Controllers;

use App\attendence;
use Illuminate\Http\Request;
use DB;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function show(attendence $attendence)
    {
        dd($attendence);
        $resultset = DB::table('attendences')->where(function($query) use ($attendence) {
            $query->where('id', '=', 2);});
        //
       /* $attendence = DB::table('attendences')
        ->orderByRaw('updated_at - created_at DESC')
        ->get();*/
      /* $attend = DB::table('attendences')
        ->select(DB::raw('count(*) as user_count, subject_id'))
        ->where('student_id', '=', $attendence)
        ->groupBy('subject_id')
        ->get();*/
        return response()->json(['inf'=>$resultset],201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function edit(attendence $attendence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, attendence $attendence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function destroy(attendence $attendence)
    {
        //
    }
}
