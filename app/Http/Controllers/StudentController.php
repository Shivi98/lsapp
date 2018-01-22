<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  'student::all();
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
     $student->sname=$request->input('sname');
     $student->class=$request->input('clas');
     $student->save();
     return response()->json(['inf'=>$student],201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
        $student =$student::find($student);
        //$inf=inf::find(1)->attends()->pluck('subjec_id');
        return response()->json(['inf'=>$student],201); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $student)
    {
        //
        $student =student::find($student);
        $student->sname=$request->input('sname');
        $student->class=$request->input('clas');
        $student->save();
        return response()->json(['inf'=>$student],201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy( $student)
    {
        //
        $student =student::find($student);
        $student->delete();
        return 'deleted';

    }
}
