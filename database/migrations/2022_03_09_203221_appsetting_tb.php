<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AppsettingTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appsetting_tb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title' , 25);
            $table->string('address',255);
            $table->string('email' , 50);
            $table->string('phone');
            $table->string('fav_img')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('admin_align')->nullable();
            $table->string('office_time');
            $table->string('copyright_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
