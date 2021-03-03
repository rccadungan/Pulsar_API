<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Import DB
use Carbon\Carbon; //Use Carbon for the timestamp

class ClearanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data into the 'clearances' table
        DB::table('clearances')->insert([
            [
                'violation_desc' => 'Dress Code',
                'violation_date' => '2020-01-15',
                'status' => 'Cleared',
                'student_id' => '1',
                'department_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'violation_desc' => 'Settle your balances. Please see Accounting Office',
                'violation_date' => '2019-08-23',
                'status' => 'Cleared',
                'student_id' => '2',
                'department_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'violation_desc' => 'Not attending classes. Please see Guidance Office',
                'violation_date' => '2021-1-23',
                'status' => 'Has not been Cleared yet',
                'student_id' => '3',
                'department_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'violation_desc' => 'Dress Code',
                'violation_date' => '2020-01-15',
                'status' => 'Cleared',
                'student_id' => '3',
                'department_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'violation_desc' => 'Dress Code',
                'violation_date' => '2020-01-15',
                'status' => 'Cleared',
                'student_id' => '4',
                'department_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
