<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_code', 20); 
            $table->string('subject_desc', 200); 
            $table->double('grade', 10, 1);
            $table->integer('num_grade');
            $table->double('credit_units', 10, 1);
            $table->double('average', 10, 1);
            $table->integer('num_average');
            $table->integer('student_id')->unsigned()->nullable(); //This will contain the value of the 'id' of the student from the 'Students' table.
            $table->integer('term_id')->unsigned()->nullable(); //This will contain the value of the 'id' of the term from the 'Term' table.
            $table->foreign('student_id')->references('id')->on('students'); 
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
        Schema::dropIfExists('grades');
    }
}
