<?php

namespace App\Http\Controllers;

use App\subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return subject::all();//
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
        $subject= new subject;
        $subject->id=$request->input('id');
        $subject->teach_id=$request->input('teach_id');
        $subject->sub_name=$request->input('sub_name');
        $subject->clas=$request->input('clas');
        //$subject->teach_id=$request->input('teach_id');
        //$subject->teach_id=$request->input('teach_id');
        $subject->save();
        return response()->json(['inf'=>$subject],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(subject $subject)
    {
        //
        $subject =$subject::find($subject);
        //$inf=inf::find(1)->attends()->pluck('subjec_id');
        return response()->json(['inf'=>$subject],201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $subject)
    {
        //
        $subject =subject::find($subject);
        $subject->id=$request->input('id');
        $subject->teach_id=$request->input('teach_id');
        $subject->sub_name=$request->input('sub_name');
        $subject->clas=$request->input('clas');
        //$subject->teach_id=$request->input('teach_id');
        //$subject->teach_id=$request->input('teach_id');
        $subject->save();
        return response()->json(['inf'=>$subject],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy( $subject)
    {
        $subject =subject::find($subject);
        $subject->delete();
        return 'deleted';        //
    }
}
