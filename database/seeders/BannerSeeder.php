<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('banner_tb')->insert([
            'name' => 'Vagetable',
            'image' => '',
            'description' => 'It is description. Be focus on your project',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
