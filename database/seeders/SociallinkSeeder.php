<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SociallinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_tb')->insert([
            'facebook' => 'https://www.facebook.com/syedshazeedul.islam/',
            'twitter' => 'https://twitter.com/shazeedul/',
            'linkedin' => 'https://www.linkedin.com/in/syed-shazeedul/',
            'instagram' => 'https://www.instagram.com/syedshazeedul.islam/',
            'pinterest' => 'https://www.pinterest.com/shazeedul/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
