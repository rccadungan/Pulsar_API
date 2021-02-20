<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StudentTableSeeder::class); //Call the StudentTableSeeder class.
        $this->call(StudentProfileTableSeeder::class); //Call the StudentProfileTableSeeder class.
        $this->call(NotifTypeTableSeeder::class); //Call the NotifTypeTableSeeder class.
        $this->call(NotificationTableSeeder::class); //Call the NotificationTableSeeder class.
        $this->call(DepartmentTableSeeder::class); //Call the DepartmentTableSeeder class.
        $this->call(ClearanceTableSeeder::class); //Call the DepartmentTableSeeder class.
        $this->call(PreRegisteredSubjectDetailTableSeeder::class); //Call the PreRegisteredSubjectDetailTableSeeder class.
        $this->call(PreRegisteredSubjectTableSeeder::class); //Call the PreRegisteredSubjectTableSeeder class.
        $this->call(TermTableSeeder::class); //Call the TermTableSeeder class.
        $this->call(PreRegistrationTableSeeder::class); //Call the PreRegistrationTableSeeder class.
    }
}
