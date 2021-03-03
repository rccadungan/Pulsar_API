<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Import DB
use Carbon\Carbon; //Use Carbon for the timestamp
use Illuminate\Support\Facades\Hash; // Import Hash

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data into the 'students' table
        DB::table('students')->insert([
            [
                'student_no' => '2020-396789',
                'fname' => 'Bea',
                'lname' => 'Mariano',
                'email' => 'beamariano@student.apc.edu.ph',
                'username' => 'bmariano',
                'password' => Hash::make('bearam01'), 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_no' => '2019-200129',
                'fname' => 'Juan',
                'lname' => 'Dela Cruz',
                'email' => 'jdelacruz@student.apc.edu.ph',
                'username' => 'jdelacruz',
                'password' => Hash::make('jdlc45'), 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_no' => '2018-112382',
                'fname' => 'Samboy',
                'lname' => 'Rivera',
                'email' => 'srivera@student.apc.edu.ph',
                'username' => 'srivera',
                'password' => Hash::make('sgy45asd541d'), 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_no' => '2020-212121',
                'fname' => 'Frances',
                'lname' => 'Castillo',
                'email' => 'fcastillo@student.apc.edu.ph',
                'username' => 'fcastillo',
                'password' => Hash::make('frances'), 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
