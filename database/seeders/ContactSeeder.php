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
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14598.566420900826!2d90.41764857197862!3d23.83134023106288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6422bc83d21%3A0x3a1bc96ce9f8ad8b!2z4KaW4Ka_4Kay4KaV4KeN4Ka34KeH4KakLCDgpqLgpr7gppXgpr4!5e0!3m2!1sbn!2sbd!4v1645846692442!5m2!1sbn!2sbd',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
