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
        //Insert data into the 'pre_registered_subjects' table
        DB::table('pre_registered_subjects')->insert([

            //Student 1 data (2020-396789)
            [
                'subject_code' => 'PEDUONE',
                'subject_desc' => 'Physical Education 1',
                'credit_units' => '2.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PROGCON',
                'subject_desc' => 'Programming Concepts and Logic',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'INPROLA',
                'subject_desc' => 'Introduction to Programming Languages',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'MANPRIN',
                'subject_desc' => 'Management Principles',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PHILHIS',
                'subject_desc' => 'Readings in Philippine History',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'GETHICS',
                'subject_desc' => 'Ethics',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'SCITECS',
                'subject_desc' => 'Science Technology and Society',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '7',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //Student 2 data (2019-200129)
            [
                'subject_code' => 'WEBPROG',
                'subject_desc' => 'Web Programming',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '8',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'PEDUFOR',
                'subject_desc' => 'Physical Education 4',
                'credit_units' => '2.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '9',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'MOBAPPL',
                'subject_desc' => 'Mobile Applications',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '10',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'OPESYST',
                'subject_desc' => 'Operating System',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '11',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'DNETCOM',
                'subject_desc' => 'Network Security, Storage and Data Comm.',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '12',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'DATAMA2',
                'subject_desc' => 'Database Management 2',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '13',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'COMPAIS',
                'subject_desc' => 'Computerized Analytics Information Systems',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '14',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //Student 3 data (2018-112382)
            [
                'subject_code' => 'ANLYTC3',
                'subject_desc' => 'Fundamentals of Analytics Modeling',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '15',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'CLDCOMP',
                'subject_desc' => 'Cloud Computing and Virtualization',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '16',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'IOTSYST',
                'subject_desc' => 'Internet of Things (Everything) Systems',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '17',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'RIZLIFE',
                'subject_desc' => 'Life and Works of Rizal',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '18',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'MCSPROJ',
                'subject_desc' => 'Applied Project for IT-MI',
                'credit_units' => '3.0',
                'section' => 'MI211',
                'prd_subject_details_id' => '19',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //Student 4 data (2020-212121)
            [
                'subject_code' => 'GDESIGN',
                'subject_desc' => 'Graphic Design',
                'credit_units' => '3.0',
                'section' => 'BMMA-182',
                'prd_subject_details_id' => '20',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')                
            ],

            [
                'subject_code' => 'LDRAWNG',
                'subject_desc' => 'Life drawing',
                'credit_units' => '3.0',
                'section' => 'BMMA-182',
                'prd_subject_details_id' => '21',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')                
            ],

            [
                'subject_code' => 'ITCONCE',
                'subject_desc' => 'Information Technology Concepts',
                'credit_units' => '3.0',
                'section' => 'BMMA-182',
                'prd_subject_details_id' => '22',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')      
            ],

            [
                'subject_code' => 'MATWORL',
                'subject_desc' => 'Mathematics in the Modern World',
                'credit_units' => '3.0',
                'section' => 'BMMA-182',
                'prd_subject_details_id' => '23',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'subject_code' => 'SCITECS',
                'subject_desc' => 'Science Technology and Society',
                'credit_units' => '3.0',
                'section' => 'BMMA-182',
                'prd_subject_details_id' => '24',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')                
            ],

            [
                'subject_code' => 'ARTAPRE',
                'subject_desc' => 'Art Appreciation',
                'credit_units' => '3.0',
                'section' => 'BMMA-182',
                'prd_subject_details_id' => '25',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')              
            ],

            [
                'subject_code' => 'PEDUTWO',
                'subject_desc' => 'Physical Education 2',
                'credit_units' => '2.0',
                'section' => 'BMMA-182',
                'prd_subject_details_id' => '26',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s') 
            ],
        ]);
    }
}
