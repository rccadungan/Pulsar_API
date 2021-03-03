<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreRegisteredSubjectDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_registered_subject_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('time', 20); 
            $table->string('day', 20); 
            $table->string('room_no', 50); 
            $table->string('instructor_name', 100); 
            $table->string('remarks', 1000); 
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
        Schema::dropIfExists('pre_registered_subject_details');
    }
}
