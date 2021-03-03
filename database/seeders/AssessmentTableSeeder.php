<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Import DB
use Carbon\Carbon; //Use Carbon for the timestamp

class AssessmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data into the 'assessments' table
        DB::table('assessments')->insert([
            [
                'scholarship_code' => 'Public HS Graduate',
                'assessment_term' => '2', 
                'assessment_course' => 'BSIT-MI', 
                'payment_method' => 'Bank Transfer', 
                'payment_desc' => "Transfer payment to APC's account via bank.", 
                'total_amount' => '26,950.00', 
                'credit_units' => '21', 
                'student_id' => '1', 
                'one_time_password_id' => '1', 
                'schedule_id' => '1', 
                'term_id' => '8', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'scholarship_code' => 'None',
                'assessment_term' => '2', 
                'assessment_course' => 'BSIT-MI', 
                'payment_method' => 'SM Bills Payment', 
                'payment_desc' => "Pay the tuition fee via SM Bills Payment.", 
                'total_amount' => '56,835.75', 
                'credit_units' => '21', 
                'student_id' => '2', 
                'one_time_password_id' => '2', 
                'schedule_id' => '8', 
                'term_id' => '8', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'scholarship_code' => 'Public HS Graduate',
                'assessment_term' => '2', 
                'assessment_course' => 'BSIT-MI', 
                'payment_method' => 'Bank Transfer', 
                'payment_desc' => "Transfer payment to APC's account via bank.", 
                'total_amount' => '30,986.89', 
                'credit_units' => '15', 
                'student_id' => '3', 
                'one_time_password_id' => '3', 
                'schedule_id' => '15', 
                'term_id' => '8', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'scholarship_code' => 'Public HS Graduate',
                'assessment_term' => '2', 
                'assessment_course' => 'BMMA-182', 
                'payment_method' => 'Bank Transfer', 
                'payment_desc' => "Transfer payment to APC's account via bank.", 
                'total_amount' => '29000.00', 
                'credit_units' => '20', 
                'student_id' => '4', 
                'one_time_password_id' => '4', 
                'schedule_id' => '20', 
                'term_id' => '8', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
