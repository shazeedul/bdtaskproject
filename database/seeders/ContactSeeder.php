<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contact_tb')->insert([
            'phone' => '+8801571228259',
            'address' => '211/5, Bashtola, Dhaka',
            'officetime' => '09:00am To 07:00pm',
            'email' => 'admin@gmail.com',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
