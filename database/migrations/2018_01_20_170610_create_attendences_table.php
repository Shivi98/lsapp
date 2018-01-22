<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendences', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('students')->onDelete('cascade');
            $table->integer('student_id')->unsigned();
                $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->string('subject_id');    
                $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
   
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendences');
    }
}
