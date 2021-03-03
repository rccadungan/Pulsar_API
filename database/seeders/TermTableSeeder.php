<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Import DB
use Carbon\Carbon; //Use Carbon for the timestamp

class TermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data into the 'terms' table
        DB::table('terms')->insert([
            [
                'term_name' => 'Term 1',
                'term_no' => '1',
                'school_year_from' => '2020',
                'school_year_to' => '2021',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'term_name' => 'Term 1',
                'term_no' => '1',
                'school_year_from' => '2019',
                'school_year_to' => '2020',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'term_name' => 'Term 2',
                'term_no' => '2',
                'school_year_from' => '2019',
                'school_year_to' => '2020',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'term_name' => 'Term 3',
                'term_no' => '3',
                'school_year_from' => '2019',
                'school_year_to' => '2020',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'term_name' => 'Term 1',
                'term_no' => '1',
                'school_year_from' => '2018',
                'school_year_to' => '2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'term_name' => 'Term 2',
                'term_no' => '2',
                'school_year_from' => '2018',
                'school_year_to' => '2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'term_name' => 'Term 3',
                'term_no' => '3',
                'school_year_from' => '2018',
                'school_year_to' => '2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'term_name' => 'Term 2',
                'term_no' => '2',
                'school_year_from' => '2020',
                'school_year_to' => '2021',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
        ]);
    }
}
