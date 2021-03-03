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
            
            //Student 1 data (2020-396789)
            //1st year 1st term
            [
                'subject_code' => 'ITCONCE',
                'subject_desc' => 'IT Concepts', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '86', 
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'ARTAPRE',
                'subject_desc' => 'Art Appreciation', 
                'midterm_grade' => '3.5', 
                'midterm_num_grade' => '93',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '91',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '92',
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'INTCOMC',
                'subject_desc' => 'Introduction to Computing for CS and IT', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90',
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'CONWORL',
                'subject_desc' => 'Contemporary World', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '86',
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'MATWORL',
                'subject_desc' => 'Mathematics in the Modern World', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90', 
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'APPROJ1',
                'subject_desc' => 'Applied Project 1', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90',
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'NATSER1',
                'subject_desc' => 'National Service 1', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '86', 
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
  
            //1st year 2nd term
            [
                'subject_code' => 'PEDUONE',
                'subject_desc' => 'Physical Education 1', 
                'midterm_grade' => '4.0', 
                'midterm_num_grade' => '98',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '98',
                'credit_units' => "2.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '98', 
                'student_id' => '2', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PROGCON',
                'subject_desc' => 'Programming Concepts and Logic', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '88',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '87', 
                'student_id' => '2', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'INPROLA',
                'subject_desc' => 'Introduction to Programming Languages', 
                'midterm_grade' => '1.5', 
                'midterm_num_grade' => '78',
                'finals_grade' => '2.0', 
                'finals_num_grade' => '82',
                'credit_units' => "3.0", 
                'term_grade' => '2.0', 
                'num_term_grade' => '80', 
                'student_id' => '2', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'MANPRIN',
                'subject_desc' => 'Management Principles', 
                'midterm_grade' => '1.5', 
                'midterm_num_grade' => '78',
                'finals_grade' => '2.0', 
                'finals_num_grade' => '82',
                'credit_units' => "3.0", 
                'term_grade' => '2.0', 
                'num_term_grade' => '80', 
                'student_id' => '2', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PHILHIS',
                'subject_desc' => 'Readings in Philippine History', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '1.5', 
                'finals_num_grade' => '78',
                'credit_units' => "3.0", 
                'term_grade' => '1.5', 
                'num_term_grade' => '82', 
                'student_id' => '2', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'GETHICS',
                'subject_desc' => 'Ethics', 
                'midterm_grade' => '3.5', 
                'midterm_num_grade' => '94',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '95',
                'credit_units' => "3.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '95', 
                'student_id' => '2', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'SCITECS',
                'subject_desc' => 'Science Technology and Society', 
                'midterm_grade' => '3.5', 
                'midterm_num_grade' => '94',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '95',
                'credit_units' => "3.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '95', 
                'student_id' => '2', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //1st year 3rd term
            [
                'subject_code' => 'DASTRUC',
                'subject_desc' => 'Data Structures', 
                'midterm_grade' => '1.0', 
                'midterm_num_grade' => '74',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '80', 
                'student_id' => '2', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PEDUTWO',
                'subject_desc' => 'Physical Education 2', 
                'midterm_grade' => '4.0', 
                'midterm_num_grade' => '96',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '94',
                'credit_units' => "2.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '95', 
                'student_id' => '2', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'BUSPROS',
                'subject_desc' => 'Business Process', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '94',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '90', 
                'student_id' => '2', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'UNDSELF',
                'subject_desc' => 'Understanding the Self', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90', 
                'student_id' => '2', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PURPCOM',
                'subject_desc' => 'Purposive Communication', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '88', 
                'student_id' => '2', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'EBUSREC',
                'subject_desc' => 'Business and Research Writing', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '93',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '92', 
                'student_id' => '2', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //2nd year 1st term
            [
                'subject_code' => 'DATAMA1',
                'subject_desc' => 'Database Management 1', 
                'midterm_grade' => '4.0', 
                'midterm_num_grade' => '95',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '93',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '94', 
                'student_id' => '2', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PEDUTRI',
                'subject_desc' => 'Physical Education 3', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "2.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '90', 
                'student_id' => '2', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'QUAMET1',
                'subject_desc' => 'Probability and Statistics', 
                'midterm_grade' => '1.0', 
                'midterm_num_grade' => '74',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '80', 
                'student_id' => '2', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 

            [
                'subject_code' => 'MOBPROG',
                'subject_desc' => 'Mobile Programming', 
                'midterm_grade' => '2.0', 
                'midterm_num_grade' => '82',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '84', 
                'student_id' => '2', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'USERDES',
                'subject_desc' => 'UI/UX Design and Programming', 
                'midterm_grade' => '2.0', 
                'midterm_num_grade' => '82',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '97',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90', 
                'student_id' => '2', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'COMPORG',
                'subject_desc' => 'Computer Organization', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90', 
                'student_id' => '2', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'INMEDIA',
                'subject_desc' => 'Interactive Media Design', 
                'midterm_grade' => '4.0', 
                'midterm_num_grade' => '98',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '98',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '98', 
                'student_id' => '2', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            

            //Student 3 data (2018-112382)
            //1st year 1st term
            [
                'subject_code' => 'ITCONCE',
                'subject_desc' => 'IT Concepts', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '86', 
                'student_id' => '2', 
                'term_id' => '5', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'ARTAPRE',
                'subject_desc' => 'Art Appreciation', 
                'midterm_grade' => '3.5', 
                'midterm_num_grade' => '93',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '91',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '92',
                'student_id' => '2', 
                'term_id' => '5', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'INTCOMC',
                'subject_desc' => 'Introduction to Computing for CS and IT', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90',
                'student_id' => '2', 
                'term_id' => '5', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'CONWORL',
                'subject_desc' => 'Contemporary World', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '86',
                'student_id' => '2', 
                'term_id' => '5', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'MATWORL',
                'subject_desc' => 'Mathematics in the Modern World', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90', 
                'student_id' => '2', 
                'term_id' => '5', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'APPROJ1',
                'subject_desc' => 'Applied Project 1', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90',
                'student_id' => '2', 
                'term_id' => '5', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'NATSER1',
                'subject_desc' => 'National Service 1', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '86', 
                'student_id' => '2', 
                'term_id' => '5', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //1st year 2nd term
            [
                'subject_code' => 'PEDUONE',
                'subject_desc' => 'Physical Education 1', 
                'midterm_grade' => '4.0', 
                'midterm_num_grade' => '98',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '98',
                'credit_units' => "2.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '98', 
                'student_id' => '2', 
                'term_id' => '6', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PROGCON',
                'subject_desc' => 'Programming Concepts and Logic', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '88',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '87', 
                'student_id' => '2', 
                'term_id' => '6', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'INPROLA',
                'subject_desc' => 'Introduction to Programming Languages', 
                'midterm_grade' => '1.5', 
                'midterm_num_grade' => '78',
                'finals_grade' => '2.0', 
                'finals_num_grade' => '82',
                'credit_units' => "3.0", 
                'term_grade' => '2.0', 
                'num_term_grade' => '80', 
                'student_id' => '2', 
                'term_id' => '6', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'MANPRIN',
                'subject_desc' => 'Management Principles', 
                'midterm_grade' => '1.5', 
                'midterm_num_grade' => '78',
                'finals_grade' => '2.0', 
                'finals_num_grade' => '82',
                'credit_units' => "3.0", 
                'term_grade' => '2.0', 
                'num_term_grade' => '80', 
                'student_id' => '2', 
                'term_id' => '6', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PHILHIS',
                'subject_desc' => 'Readings in Philippine History', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '1.5', 
                'finals_num_grade' => '78',
                'credit_units' => "3.0", 
                'term_grade' => '1.5', 
                'num_term_grade' => '82', 
                'student_id' => '2', 
                'term_id' => '6', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'GETHICS',
                'subject_desc' => 'Ethics', 
                'midterm_grade' => '3.5', 
                'midterm_num_grade' => '94',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '95',
                'credit_units' => "3.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '95', 
                'student_id' => '2', 
                'term_id' => '6', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'SCITECS',
                'subject_desc' => 'Science Technology and Society',
                'midterm_grade' => '3.5', 
                'midterm_num_grade' => '94',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '95',
                'credit_units' => "3.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '95', 
                'student_id' => '2', 
                'term_id' => '6', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //1st year 3rd term
            [
                'subject_code' => 'DASTRUC',
                'subject_desc' => 'Data Structures', 
                'midterm_grade' => '1.0', 
                'midterm_num_grade' => '74',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '80', 
                'student_id' => '2', 
                'term_id' => '7', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PEDUTWO',
                'subject_desc' => 'Physical Education 2', 
                'midterm_grade' => '4.0', 
                'midterm_num_grade' => '96',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '94',
                'credit_units' => "2.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '95', 
                'student_id' => '2', 
                'term_id' => '7', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'BUSPROS',
                'subject_desc' => 'Business Process', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '94',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '90', 
                'student_id' => '2', 
                'term_id' => '7', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'UNDSELF',
                'subject_desc' => 'Understanding the Self', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90', 
                'student_id' => '2', 
                'term_id' => '7', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PURPCOM',
                'subject_desc' => 'Purposive Communication', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '88', 
                'student_id' => '2', 
                'term_id' => '7', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'EBUSREC',
                'subject_desc' => 'Business and Research Writing', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '93',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '92', 
                'student_id' => '2', 
                'term_id' => '7', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //2nd year 1st term
            [
                'subject_code' => 'DATAMA1',
                'subject_desc' => 'Database Management 1', 
                'midterm_grade' => '4.0', 
                'midterm_num_grade' => '95',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '93',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '94', 
                'student_id' => '2', 
                'term_id' => '2', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PEDUTRI',
                'subject_desc' => 'Physical Education 3', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "2.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '90', 
                'student_id' => '2', 
                'term_id' => '2', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'QUAMET1',
                'subject_desc' => 'Probability and Statistics', 
                'midterm_grade' => '1.0', 
                'midterm_num_grade' => '74',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '80', 
                'student_id' => '2', 
                'term_id' => '2', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 

            [
                'subject_code' => 'MOBPROG',
                'subject_desc' => 'Mobile Programming', 
                'midterm_grade' => '2.0', 
                'midterm_num_grade' => '82',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '84', 
                'student_id' => '2', 
                'term_id' => '2', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'USERDES',
                'subject_desc' => 'UI/UX Design and Programming', 
                'midterm_grade' => '2.0', 
                'midterm_num_grade' => '82',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '97',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90', 
                'student_id' => '2', 
                'term_id' => '2', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'COMPORG',
                'subject_desc' => 'Computer Organization', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '90', 
                'student_id' => '2', 
                'term_id' => '2', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'INMEDIA',
                'subject_desc' => 'Interactive Media Design', 
                'midterm_grade' => '4.0', 
                'midterm_num_grade' => '98',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '98',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '98', 
                'student_id' => '2', 
                'term_id' => '2', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //2nd year 2nd term
            [
                'subject_code' => 'PEDUFOR',
                'subject_desc' => 'Physical Education 4', 
                'midterm_grade' => '4.0', 
                'midterm_num_grade' => '98',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '98',
                'credit_units' => "2.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '98', 
                'student_id' => '3', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'WEBPROG',
                'subject_desc' => 'Web Programming', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '98', 
                'student_id' => '3', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'MOBAPPL',
                'subject_desc' => 'Mobile Applications', 
                'midterm_grade' => '3.5', 
                'midterm_num_grade' => '94',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '93', 
                'student_id' => '3', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'OPESYST',
                'subject_desc' => 'Operating System', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '95',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '93', 
                'student_id' => '3', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'DNETCOM',
                'subject_desc' => 'Network Security, Storage and Data Comm.', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '95',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '93', 
                'student_id' => '3', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'DATAMA2',
                'subject_desc' => 'Database Management 2', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '95',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '93', 
                'student_id' => '3', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'COMPAIS',
                'subject_desc' => 'Computerized Analytics Information Systems', 
                'midterm_grade' => 'R', 
                'midterm_num_grade' => '<70',
                'finals_grade' => '1.0', 
                'finals_num_grade' => '74',
                'credit_units' => "3.0", 
                'term_grade' => '1.0', 
                'num_term_grade' => '74', 
                'student_id' => '3', 
                'term_id' => '3', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //2nd year 3rd term 
            [
                'subject_code' => 'NATSER2',
                'subject_desc' => 'National Service 2', 
                'midterm_grade' => '4.0', 
                'midterm_num_grade' => '100',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '100',
                'credit_units' => "3.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '100', 
                'student_id' => '3', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'ANLYTC1',
                'subject_desc' => 'Fundamentals of Business Analytics', 
                'midterm_grade' => '4.0', 
                'midterm_num_grade' => '100',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '100',
                'credit_units' => "3.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '100', 
                'student_id' => '3', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'MNTSDEV',
                'subject_desc' => 'Introduction to Systems and Design for IT-MI	', 
                'midterm_grade' => 'IP', 
                'midterm_num_grade' => 'In Progress',
                'finals_grade' => '3.5', 
                'finals_num_grade' => '94',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '94', 
                'student_id' => '3', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'COMVOIP',
                'subject_desc' => 'Telecommunications and Voip', 
                'midterm_grade' => 'IP', 
                'midterm_num_grade' => 'In Progress',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '98',
                'credit_units' => "3.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '98', 
                'student_id' => '3', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'INFOSEC',
                'subject_desc' => 'Information Systems Security', 
                'midterm_grade' => 'IP', 
                'midterm_num_grade' => 'In Progress',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '99',
                'credit_units' => "3.0", 
                'term_grade' => '4.0', 
                'num_term_grade' => '99', 
                'student_id' => '3', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PEMBEDS',
                'subject_desc' => 'Programming Embedded Systems', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '89',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '89',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '89', 
                'student_id' => '3', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'EXCOMP1',
                'subject_desc' => 'Extensive Communication Competency Program 1', 
                'midterm_grade' => 'IP', 
                'midterm_num_grade' => 'In Progress',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '86', 
                'student_id' => '3', 
                'term_id' => '4', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            
            //3rd year 1st term 
            [
                'subject_code' => 'MSYADD1',
                'subject_desc' => 'Systems Analysis & Detailed Design for IT-MI', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '89',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '88', 
                'student_id' => '3', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'ICTSRV1',
                'subject_desc' => 'ICT Services Management 1', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '98',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '92', 
                'student_id' => '3', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'NETDESM',
                'subject_desc' => 'Network Design and Management', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '95',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '93', 
                'student_id' => '3', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'SWDENET',
                'subject_desc' => 'Software-Defined Networks and Virtualization', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '3.0', 
                'finals_num_grade' => '89',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_grade' => '88', 
                'student_id' => '3', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'ANLYTC2',
                'subject_desc' => 'Fundamentals of Enterprise Data Management', 
                'midterm_grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals_grade' => '4.0', 
                'finals_num_grade' => '98',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_grade' => '94', 
                'student_id' => '3', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //Student 4 data (2020-212121)
            //1st year 1st term
            [
                'subject_code' => 'PDESIGN',
                'subject_desc' => 'Philosophy of Design', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '86', 
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'FDRAWNG',
                'subject_desc' => 'Free drawing', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '86', 
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'INTROMA',
                'subject_desc' => 'Intro to Multimedia Arts', 
                'midterm_grade' => '2.5', 
                'midterm_num_grade' => '86',
                'finals_grade' => '2.5', 
                'finals_num_grade' => '86',
                'credit_units' => "3.0", 
                'term_grade' => '2.5', 
                'num_term_grade' => '86', 
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PURPCOM',
                'subject_desc' => 'Purposive Communication', 
                'midterm grade' => '3.5', 
                'midterm_num_grade' => '93',
                'finals grade' => '3.5', 
                'finals_num_grade' => '91',
                'credit_units' => "3.0", 
                'term_grade' => '3.5', 
                'num_term_average' => '92',
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'UNDSELF',
                'subject_desc' => 'Understanding the Self', 
                'midterm grade' => '3.0', 
                'midterm_num_grade' => '90',
                'finals grade' => '3.0', 
                'finals_num_grade' => '90',
                'credit_units' => "3.0", 
                'term_grade' => '3.0', 
                'num_term_average' => '90', 
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PEDUONE',
                'subject_desc' => 'Physical Education 1', 
                'midterm grade' => '4.0', 
                'midterm_num_grade' => '96',
                'finals grade' => '3.5', 
                'finals_num_grade' => '94',
                'credit_units' => "2.0", 
                'term_grade' => '4.0', 
                'num_term_average' => '95', 
                'student_id' => '1', 
                'term_id' => '1', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
