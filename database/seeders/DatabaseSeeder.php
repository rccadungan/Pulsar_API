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
    }
}
