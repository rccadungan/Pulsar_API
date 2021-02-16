<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClearancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clearances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('violation_desc', 500); 
            $table->dateTime('violation_date'); //Y-m-d is the default date format for mysql date type.
            $table->string('status', 50); 
            $table->integer('student_id')->unsigned(); //This will contain the value of the 'id' of the student from the 'Students' table.
            $table->integer('department_id')->unsigned(); //This will contain the value of the 'id' of the department from the 'Department' table.
            $table->foreign('student_id')->references('id')->on('students'); 
            $table->foreign('department_id')->references('id')->on('departments'); 
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
        Schema::dropIfExists('clearances');
    }
}
