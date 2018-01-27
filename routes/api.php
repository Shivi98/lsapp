<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiresource('/student','studentcontroller');
Route::apiresource('/teach','teachcontroller');
Route::apiresource('/attendence','AttendenceController');
Route::apiresource('/subject','subjectcontroller');
Route::apiresource('/index','indexcontroller');
Route::apiresource('/time_table','timetablecontroller');





