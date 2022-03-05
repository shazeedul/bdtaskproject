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
            'name' => 'Ogani',
            'image' => '',
            'description' => '<span style="font-size: 14px; text-transform: uppercase; font-weight: 700; letter-spacing: 4px; color: rgb(127, 173, 57); font-family: Cairo, sans-serif;">FRUIT FRESH</span><span style="font-family: Cairo, sans-serif;"></span><h2 style="margin: 10px 0px; font-weight: 700; line-height: 52px; font-size: 46px; color: rgb(37, 37, 37); font-family: Cairo, sans-serif;">Vegetable<br>100% Organic</h2><p style="margin-right: 0px; margin-bottom: 35px; margin-left: 0px; font-family: Cairo, sans-serif; color: rgb(111, 111, 111); line-height: 26px;">Free Pickup and Delivery Available</p><a href="#" class="primary-btn" style="color: rgb(255, 255, 255); background: rgb(127, 173, 57); display: inline-block; font-size: 14px; padding: 10px 28px; text-transform: uppercase; font-weight: 700; letter-spacing: 2px; font-family: Cairo, sans-serif;">SHOP NOW</a><br>',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
