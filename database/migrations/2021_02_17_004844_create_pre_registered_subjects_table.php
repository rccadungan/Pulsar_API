<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreRegisteredSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_registered_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_code', 20); 
            $table->string('subject_desc', 200); 
            $table->double('credit_units', 10, 2);
            $table->string('section', 50); 
            $table->integer('prd_subject_details_id')->unsigned(); //This will contain the value of the 'id' of the pre registered subject detail from the 'Pre Registered Subject Details' table.
            $table->foreign('prd_subject_details_id')->references('id')->on('pre_registered_subject_details'); 
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
        Schema::dropIfExists('pre_registered_subjects');
    }
}
