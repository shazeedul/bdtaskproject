<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appsetting_tb')->insert([
            'email' => 'admin@gmail.com',
            'address' => '211/5, Bashtola, Dhaka',
            'title' => 'Ogani',
            'phone' => '+8801571228259',
            'office_time' => 'Free Shipping for all Order of $99',
            'copyright_text' => 'Copyright ©2022 All rights reserved | This template is made with  by Shazeedul',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
