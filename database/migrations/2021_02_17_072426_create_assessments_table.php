<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('scholarship_code', 100); 
            $table->integer('assessment_term'); 
            $table->string('assessment_course', 100); 
            $table->string('payment_method', 100);
            $table->string('payment_desc', 200);
            $table->string('total_amount', 30);
            $table->double('credit_units', 10, 1);
            $table->integer('student_id')->unsigned()->nullable(); //This will contain the  value of the 'id' of the student from the 'Students' table.
            $table->integer('one_time_password_id')->unsigned()->nullable(); //This will contain the value of the 'id' of the one time password from the 'One Time Password' table.
            $table->integer('schedule_id')->unsigned()->nullable(); //This will contain the value of the 'id' of the schedule from the 'Schedules' table.
            $table->integer('term_id')->unsigned()->nullable(); //This will contain the value of the 'id' of the term from the 'Term' table.
            $table->foreign('student_id')->references('id')->on('students'); 
            $table->foreign('one_time_password_id')->references('id')->on('one_time_passwords'); 
            $table->foreign('schedule_id')->references('id')->on('schedules'); 
            $table->foreign('term_id')->references('id')->on('terms'); 
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
        Schema::dropIfExists('assessments');
    }
}
