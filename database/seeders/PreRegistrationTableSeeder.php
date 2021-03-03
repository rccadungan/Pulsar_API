<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Import DB
use Carbon\Carbon; //Use Carbon for the timestamp

class PreRegistrationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data into the 'pre_registrations' table
        DB::table('pre_registrations')->insert([

            //Student 1 data (2020-396789)
            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '7',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //Student 2 data (2019-200129)
            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '8',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '9',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '10',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '11',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '12',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '13',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '14',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //Student 3 data (2018-112382)
            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '15',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '16',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '17',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '18',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'student_id' => '1',
                'term_id' => '8',
                'pre_registered_subject_id' => '19',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
