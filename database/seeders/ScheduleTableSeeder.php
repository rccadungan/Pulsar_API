<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Import DB
use Carbon\Carbon; //Use Carbon for the timestamp

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data into the 'schedules' table
        DB::table('schedules')->insert([
            [
                'sched_room_no' => '302',
                'sched_subject_day' => 'Wednesday', 
                'sched_subject_time' => '1:00 PM - 5:00 PM', 
                'instructor_name' => 'Mr. James Santos', 
                'term_calendar' => 'Term 1 Calendar', 
                'student_id' => '1', 
                'term_id' => '1', 
                'pre_registered_subject_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'sched_room_no' => '304',
                'sched_subject_day' => 'Monday, Thursday', 
                'sched_subject_time' => '7:30 PM - 9:30 PM', 
                'instructor_name' => 'Ms. Samantha Chiu', 
                'term_calendar' => 'Term 1 Calendar', 
                'student_id' => '2', 
                'term_id' => '2', 
                'pre_registered_subject_id' => '2', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'sched_room_no' => '308',
                'sched_subject_day' => 'Saturday', 
                'sched_subject_time' => '7:30 PM - 11:30 PM', 
                'instructor_name' => 'Mr. Roi Thompson', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '3', 
                'term_id' => '3', 
                'pre_registered_subject_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
