<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('notif_date_time'); //Y-m-d is the default date format for mysql date type.
            $table->integer('notif_type_id')->unsigned()->nullable(); //This will contain the value of the 'id' of the notification type from the 'Notif Type' table. 
            $table->integer('student_id')->unsigned()->nullable(); //This will contain the value of the 'id' of the student from the 'Students' table. 
            $table->foreign('notif_type_id')->references('id')->on('notif_types'); 
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
        Schema::dropIfExists('notifications');
    }
}
