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
                'midterm_grade' => '3.5', 
                'midterm_num_grade' => '92', 
                'finals_grade' => '3.5',
                'finals_num_grade' => '94',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '93', 
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PEDUTRI',
                'subject_desc' => 'Physical Education 3', 
                'midterm_grade'  => '4.0',
                'midterm_num_grade' => '100',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '92',
                'credit_units' => "3.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '96', 
                'student_id' => '2', 
                'term_id' => '2', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'RIZLIFE',
                'subject_desc' => 'Life and Works of Rizal', 
                'midterm_grade'  => '3.0', 
                'midterm_num_grade' => '87',
                'finals_grade' => '3.5',
                'finals_num_grade' => '91',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '89', 
                'student_id' => '3', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
