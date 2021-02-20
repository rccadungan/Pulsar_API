<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Import DB
use Carbon\Carbon; //Use Carbon for the timestamp

class StudentProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data into the 'student_profiles' table
        DB::table('student_profiles')->insert([
            [
                'address' => 'Magallanes, Makati City',
                'contact_no' => '09857128863',
                'course' => 'BSIT-MI, Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology',
                'birthdate' => '2002-03-15',
                'birth_place' => 'Manila City',
                'religion' => 'Catholic', 
                'student_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'address' => 'BGC, Taguig City',
                'contact_no' => '09957821469',
                'course' => 'BSIT-MI, Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology',
                'birthdate' => '2001-5-5',
                'birth_place' => 'Makati City',
                'religion' => 'Catholic', 
                'student_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'address' => 'Marikina City',
                'contact_no' => '09957863989',
                'course' => 'BSIT-MI, Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology',
                'birthdate' => '1999-11-20',
                'birth_place' => 'Manila City',
                'religion' => 'Islam', 
                'student_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
