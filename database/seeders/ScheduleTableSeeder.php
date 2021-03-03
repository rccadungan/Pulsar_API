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

            //Student 1 data (2020-396789)
            //PEDUONE
            [
                'sched_room_no' => 'GYM',
                'sched_subject_day' => 'Monday, Thursday', 
                'sched_subject_time' => '7:30 AM - 9:30 AM', 
                'instructor_name' => 'Mr. Alen Coss', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '1', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //PROGCON
            [
                'sched_room_no' => '818',
                'sched_subject_day' => 'Monday, Thursday', 
                'sched_subject_time' => '9:30 AM - 11:30 AM', 
                'instructor_name' => 'Mr. Roi Thompson', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '1', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '2', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //INPROLA
            [
                'sched_room_no' => '816',
                'sched_subject_day' => 'Tuesday, Friday', 
                'sched_subject_time' => '7:30 AM - 9:30 AM', 
                'instructor_name' => 'Ms. Pia Chui', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '1', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //MANPRIN
            [
                'sched_room_no' => '818',
                'sched_subject_day' => 'Tuesday, Friday', 
                'sched_subject_time' => '11:30 AM - 1:30 PM', 
                'instructor_name' => 'Ms. Grace Vello', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '1', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //PHILHIS
            [
                'sched_room_no' => '818',
                'sched_subject_day' => 'Tuesday, Friday', 
                'sched_subject_time' => '1:30 PM - 3:30 PM', 
                'instructor_name' => 'Ms. Nancy Bine', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '1', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '5', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //GETHICS
            [
                'sched_room_no' => '316',
                'sched_subject_day' => 'Wednesday', 
                'sched_subject_time' => '7:30 AM - 9:30 AM', 
                'instructor_name' => 'Mr. James Santos', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '1', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '6', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //SCITECS
            [
                'sched_room_no' => '816',
                'sched_subject_day' => 'Wednesday', 
                'sched_subject_time' => '1:30 PM - 3:30 PM', 
                'instructor_name' => 'Mr. Thai Erup', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '1', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '7', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //Student 2 data (2019-200129)
            //WEBPROG
            [
                'sched_room_no' => '802',
                'sched_subject_day' => 'Monday, Thursday', 
                'sched_subject_time' => '7:30 AM - 9:30 AM', 
                'instructor_name' => 'Mr. Jarret Coss', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '2', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '8', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //PEDUFOR
            [
                'sched_room_no' => 'FGYM1,FGYM2',
                'sched_subject_day' => 'Monday, Thursday', 
                'sched_subject_time' => '9:30 AM - 11:30 AM', 
                'instructor_name' => 'Mr. Scott Thompson', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '2', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '9', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //MOBAPPL
            [
                'sched_room_no' => '214',
                'sched_subject_day' => 'Tuesday, Friday', 
                'sched_subject_time' => '7:30 AM - 9:30 AM', 
                'instructor_name' => 'Ms. Pia Gray', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '2', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '10', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //OPESYST 
            [
                'sched_room_no' => '214',
                'sched_subject_day' => 'Tuesday, Friday', 
                'sched_subject_time' => '11:30 AM - 1:30 PM', 
                'instructor_name' => 'Ms. Grace Choi', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '2', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '11', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //DNETCOM
            [
                'sched_room_no' => '204',
                'sched_subject_day' => 'Tuesday, Friday', 
                'sched_subject_time' => '1:30 PM - 3:30 PM', 
                'instructor_name' => 'Ms. Nancy Mulligan', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '2', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '12', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //DATAMA2
            [
                'sched_room_no' => '304',
                'sched_subject_day' => 'Wednesday', 
                'sched_subject_time' => '7:30 AM - 9:30 AM', 
                'instructor_name' => 'Mr. Jim Santos', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '2', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '13', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //COMPAIS
            [
                'sched_room_no' => '306',
                'sched_subject_day' => 'Wednesday', 
                'sched_subject_time' => '1:30 PM - 3:30 PM', 
                'instructor_name' => 'Mr. Jack Alen', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '2', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '14', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //Student 3 data (2018-112382)
            //ANLYTC3
            [
                'sched_room_no' => '312',
                'sched_subject_day' => 'Monday, Thursday', 
                'sched_subject_time' => '9:30 AM - 11:30 AM', 
                'instructor_name' => 'Ms. Rhea Pia', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '3', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '15', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //CLDCOMP
            [
                'sched_room_no' => '312',
                'sched_subject_day' => 'Tuesday, Friday', 
                'sched_subject_time' => '1:00 PM - 3:00 PM', 
                'instructor_name' => 'Mr. Joshua Santos', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '3', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '16', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

             //IOTSYST
            [
                'sched_room_no' => '202',
                'sched_subject_day' => 'Wednesday', 
                'sched_subject_time' => '7:30 AM - 11:30 AM', 
                'instructor_name' => 'Ms. Jen Taylor', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '3', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '17', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //RIZLIFE
            [
                'sched_room_no' => '808',
                'sched_subject_day' => 'Monday, Thursday', 
                'sched_subject_time' => '1:00 PM - 3:00 PM', 
                'instructor_name' => 'Mr. Jose Cruz', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '3', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '18', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //MCSPROJ
            [
                'sched_room_no' => '514',
                'sched_subject_day' => 'Monday, Thursday', 
                'sched_subject_time' => '3:00 PM - 5:00 PM', 
                'instructor_name' => 'Jeniffer Ali', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '3', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '19', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //Student 4 data (2020-212121)
            //GDESIGN
            [
                'sched_room_no' => '608',
                'sched_subject_day' => 'Monday, Thursday', 
                'sched_subject_time' => '7:30 AM - 9:30 AM', 
                'instructor_name' => 'Mr. Ryan Bass', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '4', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '20', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //LDRAWNG
            [
                'sched_room_no' => '608',
                'sched_subject_day' => 'Monday, Thursday', 
                'sched_subject_time' => '9:30 AM - 11:30 AM', 
                'instructor_name' => 'Mr. Ludwig Kim', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '4', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '21', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //ITCONCE
            [
                'sched_room_no' => '512',
                'sched_subject_day' => 'Tuesday, Friday', 
                'sched_subject_time' => '7:30 AM - 9:30 AM', 
                'instructor_name' => 'Ms. Jenliyn Adarna', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '4', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '22', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //MATWORL
            [
                'sched_room_no' => '812',
                'sched_subject_day' => 'Tuesday, Friday', 
                'sched_subject_time' => '11:30 AM - 1:30 PM', 
                'instructor_name' => 'Ms. Ali Yana', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '4', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '23', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //SCITECS
            [
                'sched_room_no' => '812',
                'sched_subject_day' => 'Tuesday, Friday', 
                'sched_subject_time' => '1:30 PM - 3:30 PM', 
                'instructor_name' => 'Ms. Anne Smith', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '4', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '24', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //ARTAPRE
            [
                'sched_room_no' => '308',
                'sched_subject_day' => 'Wednesday', 
                'sched_subject_time' => '7:30 AM - 9:30 AM', 
                'instructor_name' => 'Mr. Cardo Dalisay', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '4', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '25', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

           //PEDUTWO
            [
                'sched_room_no' => 'GYM',
                'sched_subject_day' => 'Wednesday', 
                'sched_subject_time' => '1:30 PM - 3:30 PM', 
                'instructor_name' => 'Mr. Vhong Navarette', 
                'term_calendar' => 'Term 2 Calendar', 
                'student_id' => '4', 
                'term_id' => '8', 
                'pre_registered_subject_id' => '26', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
