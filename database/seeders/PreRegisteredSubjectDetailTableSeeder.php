<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Import DB
use Carbon\Carbon; //Use Carbon for the timestamp

class PreRegisteredSubjectDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data into the 'student_profiles' table
        DB::table('pre_registered_subject_details')->insert([
            [
                'time' => '1:00 PM - 5:00 PM',
                'day' => 'Wednesday',
                'room_no' => '302',
                'instructor_name' => 'Mr. James Santos',
                'remarks' => 'Reasons',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'time' => '7:30 PM - 9:30 PM',
                'day' => 'Monday, Thursday',
                'room_no' => '304',
                'instructor_name' => 'Ms. Samantha Chiu',
                'remarks' => 'Reasons',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'time' => '7:30 PM - 11:30 PM',
                'day' => 'Saturday',
                'room_no' => '308',
                'instructor_name' => 'Mr. Roi Thompson',
                'remarks' => 'Reasons',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
