<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poster_tb')->insert([
            'poster_image1' => '',
            'poster_image2' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
