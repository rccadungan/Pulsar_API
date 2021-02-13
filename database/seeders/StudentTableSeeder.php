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
            'student_no' => '2021-396789',
            'fname' => 'Bea',
            'lname' => 'Ram',
            'email' => 'bearam@student.apc.edu.ph',
            'username' => 'bear',
            'password' => Hash::make('bearam01'), 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_no' => '2020-200129',
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
                'fname' => 'Sam',
                'lname' => 'Gy',
                'email' => 'sgy@student.apc.edu.ph',
                'username' => 'sgy',
                'password' => Hash::make('sgy45asd541d'), 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
            ]);
    }
}
