<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address', 100);
            $table->integer('contact_no'); //Unable to set the value of the variable as the system treats it as a primary key. 
            $table->string('course', 150);
            $table->date('birthdate'); //Y-m-d is the default date format for mysql date type.
            $table->string('birth_place', 100);
            $table->string('religion', 50);
            $table->integer('student_id')->unsigned()->nullable(); //This will contain the value of the 'id' of the student from the 'Students' table. 
            $table->foreign('student_id')->references('id')->on('students'); 
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
        Schema::dropIfExists('student_profiles');
    }
}
