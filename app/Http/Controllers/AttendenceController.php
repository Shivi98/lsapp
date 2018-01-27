<?php
namespace App\Http\Controllers;

use App\attendence;
use Illuminate\Http\Request;
use DB;

class AttendenceController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return attendence::all();//
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
    
    public function show( $attendence)//yeh function ek bache ke sare subjects me alag alag attendence dega
    {   
        $attend = DB::table('attendences')
        ->select(DB::raw('count(*) as total_attendence, subject_id'))
        ->where('student_id','=',$attendence)
        ->groupBy('subject_id')
        ->get();
       
        return response()->json(['inf'=>$attend],201);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function edit(attendence $attendence)
    {
      
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function destroy( $attendence)
    {   // yeh function delete nhi krega 
        //bhai yeh function sirf return krega ek subject me sabhi bachho ki attendence kinni hai
        //show function ek bache ke sabhi subject return krega ye uska ulta hai
        $attend = DB::table('attendences')
        ->select(DB::raw('count(*) as user_count, student_id'))
        ->where('subject_id','=',$attendence)
        ->groupBy('student_id')
        ->get();
       
        return response()->json(['inf'=>$attend],201);
    }
}
