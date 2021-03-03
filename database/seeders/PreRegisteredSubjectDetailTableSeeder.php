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
        //Insert data into the 'pre_registered_subject_details' table
        DB::table('pre_registered_subject_details')->insert([
            
            //Student 1 data (2020-396789)
            //PEDUONE
            [
                'time' => '7:30 AM - 9:30 AM',
                'day' => 'Monday, Thursday',
                'room_no' => 'GYM',
                'instructor_name' => 'Mr. Alen Coss',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //PROGCON
            [
                'time' => '9:30 AM - 11:30 AM',
                'day' => 'Monday, Thursday',
                'room_no' => '818',
                'instructor_name' => 'Mr. Roi Thompson',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //INPROLA
            [
                'time' => '7:30 AM - 9:30 AM',
                'day' => 'Tuesday, Friday',
                'room_no' => '816',
                'instructor_name' => 'Ms. Pia Chui',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //MANPRIN  
            [
                'time' => '11:30 AM - 1:30 PM',
                'day' => 'Tuesday, Friday',
                'room_no' => '818',
                'instructor_name' => 'Ms. Grace Vello',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //PHILHIS
            [
                'time' => '1:30 PM - 3:30 PM',
                'day' => 'Tuesday, Friday',
                'room_no' => '818',
                'instructor_name' => 'Ms. Nancy Bine',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

            ],

            //GETHICS
            [
                'time' => '7:30 AM - 9:30 AM',
                'day' => 'Wednesday',
                'room_no' => '316',
                'instructor_name' => 'Mr. James Santos',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //SCITECS
            [
                'time' => '1:30 PM - 3:30 PM',
                'day' => 'Wednesday',
                'room_no' => '816',
                'instructor_name' => 'Mr. Thai Erup',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //Student 2 data (2019-200129)
            //WEBPROG
            [
                'time' => '7:30 AM - 9:30 AM',
                'day' => 'Monday, Thursday',
                'room_no' => '802',
                'instructor_name' => 'Mr. Jarret Coss',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //PEDUFOR
            [
                'time' => '9:30 AM - 11:30 AM',
                'day' => 'Monday, Thursday',
                'room_no' => 'FGYM1,FGYM2',
                'instructor_name' => 'Mr. Scott Thompson',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //MOBAPPL
            [
                'time' => '7:30 AM - 9:30 AM',
                'day' => 'Tuesday, Friday',
                'room_no' => '214',
                'instructor_name' => 'Ms. Pia Gray',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //OPESYST  
            [
                'time' => '11:30 AM - 1:30 PM',
                'day' => 'Tuesday, Friday',
                'room_no' => '214',
                'instructor_name' => 'Ms. Grace Choi',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //DNETCOM
            [
                'time' => '1:30 PM - 3:30 PM',
                'day' => 'Tuesday, Friday',
                'room_no' => '204',
                'instructor_name' => 'Ms. Nancy Mulligan',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

            ],

            //DATAMA2
            [
                'time' => '7:30 AM - 9:30 AM',
                'day' => 'Wednesday',
                'room_no' => '304',
                'instructor_name' => 'Mr. Jim Santos',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //COMPAIS
            [
                'time' => '1:30 PM - 3:30 PM',
                'day' => 'Wednesday',
                'room_no' => '306',
                'instructor_name' => 'Mr. Jack Alen',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //Student 3 data (2018-112382)
            //ANLYTC3
            [
                'time' => '9:30 AM - 11:30 AM',
                'day' => 'Tuesday, Friday',
                'room_no' => '312',
                'instructor_name' => 'Ms. Rhea Pia',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
            //CLDCOMP
            [
                'time' => '1:00 PM - 3:00 PM',
                'day' => 'Tuesday, Friday',
                'room_no' => '312',
                'instructor_name' => 'Mr. Joshua Santos',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //IOTSYST
            [
                'time' => '7:30 AM - 11:30 AM',
                'day' => 'Wednesday',
                'room_no' => '202',
                'instructor_name' => 'Ms. Jen Taylor',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //RIZLIFE
            [
                'time' => '1:00 PM - 3:00 PM',
                'day' => 'Monday, Thursday',
                'room_no' => '808',
                'instructor_name' => 'Mr. Jose Cruz',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
            //MCSPROJ
            [
                'time' => '3:00 PM - 5:00 PM',
                'day' => 'Monday, Thursday',
                'room_no' => '514',
                'instructor_name' => 'Ms. Jeniffer Ali',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //Student 4 data (2020-212121)
            //GDESIGN
            [
                'time' => '7:30 AM - 9:30 AM',
                'day' => 'Monday, Thursday',
                'room_no' => '608',
                'instructor_name' => 'Mr. Ryan Bass',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //LDRAWNG
            [
                'time' => '9:30 AM - 11:30 AM',
                'day' => 'Monday, Thursday',
                'room_no' => '608',
                'instructor_name' => 'Mr. Ludwig Kim',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //ITCONCE
            [
                'time' => '7:30 AM - 9:30 AM',
                'day' => 'Tuesday, Friday',
                'room_no' => '512',
                'instructor_name' => 'Ms. Jenliyn Adarna',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //MATWORL
            [
                'time' => '11:30 AM - 1:30 PM',
                'day' => 'Tuesday, Friday',
                'room_no' => '812',
                'instructor_name' => 'Ms. Ali Yana',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //SCITECS
            [
                'time' => '1:30 PM - 3:30 PM',
                'day' => 'Tuesday, Friday',
                'room_no' => '812',
                'instructor_name' => 'Ms. Anne Smith',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //ARTAPRE
            [
                'time' => '7:30 AM - 9:30 AM',
                'day' => 'Wednesday',
                'room_no' => '308',
                'instructor_name' => 'Mr. Cardo Dalisay',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //PEDUTWO
            [
                'time' => '1:30 PM - 3:30 PM',
                'day' => 'Wednesday',
                'room_no' => 'GYM',
                'instructor_name' => 'Mr. Vhong Navarette',
                'remarks' => 'None',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
