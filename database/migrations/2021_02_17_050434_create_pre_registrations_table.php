<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned(); //This will contain the value of the 'id' of the student from the 'Students' table.
            $table->integer('term_id')->unsigned(); //This will contain the value of the 'id' of the term from the 'Term' table.
            $table->integer('pre_registered_subject_id')->unsigned(); //This will contain the value of the 'id' of the pre registered subject from the 'Pre Registered Subject' table.
            $table->foreign('student_id')->references('id')->on('students'); 
            $table->foreign('term_id')->references('id')->on('terms'); 
            $table->foreign('pre_registered_subject_id')->references('id')->on('pre_registered_subjects'); 
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
        Schema::dropIfExists('pre_registrations');
    }
}
