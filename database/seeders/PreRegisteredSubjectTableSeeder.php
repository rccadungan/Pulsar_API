<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Import DB
use Carbon\Carbon; //Use Carbon for the timestamp

class PreRegisteredSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data into the 'student_profiles' table
        DB::table('pre_registered_subjects')->insert([
            [
                'subject_code' => 'ITCONCE',
                'subject_desc' => 'IT Concepts',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PEDUTRI',
                'subject_desc' => 'Physical Education 3',
                'credit_units' => '3.0',
                'section' => 'MI203',
                'prd_subject_details_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'RIZLIFE',
                'subject_desc' => 'Life and Works of Rizal',
                'credit_units' => '3.0',
                'section' => 'MI182',
                'prd_subject_details_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
