<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
           // $table->increments('id');
             $table->string('id'); 
             $table->primary('id');
             //$table->unique('subid');
            $table->integer('teach_id')->unsigned();
                $table->foreign('teach_id')->references('id')->on('teaches')->onDelete('cascade');;
            $table->text('sub_name');
            $table->integer('clas');
            $table->integer('attendence')->default(0) ;   
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
        Schema::dropIfExists('subjects');
    }
}
