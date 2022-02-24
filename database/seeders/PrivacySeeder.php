<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PrivacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('privacy_tb')->insert([
            'header' => 'Privacy Policy',
            'description' => 'Information Collected
                                Our Site collects information regarding domain names, IP address (static or dynamic IP-address that sometimes point to a particular identifiable computer or device), type of browser, operating system, time of access and referring/exit web site addresses. This information is used by PrepBootstrap. for operational purposes, to maintain service quality and to track site trends and statistics. Most of the time, this information does not personally identify you.
                                We also collect any personal information that you choose to provide when you use this Site. This may include, but is not limited to the events when you: create an account, order and/or download products, contact our sales department, post content in our forums or interact with other areas of our support center. This information of personal nature may include, your name, e-mail address, and any other information selected by you to share. We may collect any additional personal information you knowingly and voluntarily provide through such posting, contact or interaction, in cases when you post content in the forums, interact with other areas of our support center, or contact our sales department or support teams, In case you sign up for any PrepBootstrap. newsletter, webinar, survey, other communication or you just want to make general contact with us, we will collect information of your contact to fulfill your request. In case you wan to unsubscribe, follow the unsubscribe link that appears at the end of each communication or, you may unsubscribe via your account preferences.',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
