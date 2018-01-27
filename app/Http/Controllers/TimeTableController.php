<?php

namespace App\Http\Controllers;

use App\time_table;
use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  time_table::all();
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

     $student= new student;
     $student->subject_id=$request->input('subject_id');
     $student->clas=$request->input('clas');
     $student->section=$request->input('section');
     $student->start_time=$request->input('start_time');
     $student->end_time=$request->input('end_time');

     $student->save();
     return response()->json(['inf'=>$student],201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\time_table  $time_table
     * @return \Illuminate\Http\Response
     */
    public function show(time_table $time_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\time_table  $time_table
     * @return \Illuminate\Http\Response
     */
    public function edit(time_table $time_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\time_table  $time_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, time_table $time_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\time_table  $time_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(time_table $time_table)
    {
        //
    }
}
