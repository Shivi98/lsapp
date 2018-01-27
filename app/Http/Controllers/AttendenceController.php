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
        $attendence = new attendence();
        $records = $request->query();
        foreach($records as $record){
            $attendence->create($record);
        }

    /* $counter = $records.length();
        for($i = 0; $i < $counter; $i += 1){
            $attendence->student_id = $records[$i].student_id;
            $attendence->subject_id = $records[$i].subject_id;
            $attendence->save();
        } */
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function show(attendence $attendence)
    {
        // Instead of 2 we can use any variable
        // Testing is required

       $result = DB::table('attendence')->where('student_id', 2);

        return $result;
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
