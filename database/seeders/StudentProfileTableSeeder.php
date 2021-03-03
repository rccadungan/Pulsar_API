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
                'contact_no' => '0985-712-8863',
                'course' => 'BSIT-MI, Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology',
                'birthdate' => '2002-03-15',
                'birth_place' => 'Manila City',
                'religion' => 'Catholic', 
                'image' => 'student_1_no_2020396789.jpg',
                'student_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'address' => 'BGC, Taguig City',
                'contact_no' => '0995-782-1469',
                'course' => 'BSIT-MI, Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology',
                'birthdate' => '2001-5-5',
                'birth_place' => 'Makati City',
                'religion' => 'Catholic', 
                'image' => 'student_2_no_2019200129.jpg',
                'student_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'address' => 'Marikina City',
                'contact_no' => '0992-786-3989',
                'course' => 'BSIT-MI, Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology',
                'birthdate' => '1999-11-20',
                'birth_place' => 'Manila City',
                'religion' => 'Islam', 
                'image' => 'student_3_no_2018112382.jpg',
                'student_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'address' => 'Sta.Ana, Taguig City',
                'contact_no' => '0908-139-4578',
                'course' => 'Bachelor of Multimedia Arts',
                'birthdate' => '2000-04-14',
                'birth_place' => 'Taguig City',
                'religion' => 'Born Again', 
                'image' => 'student_4_no_2020-212121.jpg',
                'student_id' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
