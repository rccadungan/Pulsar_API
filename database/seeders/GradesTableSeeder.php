<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Import DB
use Carbon\Carbon; //Use Carbon for the timestamp

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data into the 'grades' table
        DB::table('grades')->insert([
            [
                'subject_code' => 'ITCONCE',
                'subject_desc' => 'IT Concepts', 
                'grade' => '3.5', 
                'num_grade' => '92', 
                'credit_units' => "3.0", 
                'average' => '3.5', 
                'num_average' => '92', 
                'student_id' => '1', 
                'term_id' => '1', 
                'pre_registered_subject_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PEDUTRI',
                'subject_desc' => 'Physical Education 3', 
                'grade' => '4.0', 
                'num_grade' => '98', 
                'credit_units' => "3.0", 
                'average' => '4.0', 
                'num_average' => '98', 
                'student_id' => '2', 
                'term_id' => '2', 
                'pre_registered_subject_id' => '2', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'RIZLIFE',
                'subject_desc' => 'Life and Works of Rizal', 
                'grade' => '4.0', 
                'num_grade' => '99', 
                'credit_units' => "3.0", 
                'average' => '4.0', 
                'num_average' => '99', 
                'student_id' => '3', 
                'term_id' => '3', 
                'pre_registered_subject_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
