<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([[
            'key' => "name",
            'description' => "Organization Name",
            'value' => "She Thinks Code",
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'key' => "url",
            'description' => "Website URL",
            'value' => "https://shethinkscode.org",
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'key' => "slogan",
            'description' => "Organization Slogan",
            'value' => "Learning Today, Leading Tomorrow",
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'key' => "phone",
            'description' => "Organization Contact Number",
            'value' => "01612404200",
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'key' => "email",
            'description' => "Organization Contact Email",
            'value' => "info@dshethinkscode.org",
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'key' => "address",
            'description' => "Organization Address",
            'value' => "66 Mohakhali, Dhaka 1212",
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'key' => "facebook.link",
            'description' => "Link to Official Facebook Page",
            'value' => "https://www.facebook.com/shethinkscode/",
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'key' => "linkedin.link",
            'description' => "Link to Official Linkedin Page",
            'value' => "https://www.linkedin.com/company/she-thinks-code/",
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'key' => "twitter.link",
            'description' => "Link to Official Twitter Page",
            'value' => "https://www.twitter.com//",
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'key' => "instagram.link",
            'description' => "Link to Official Instagram Page",
            'value' => "https://www.instagram.com/",
            'created_at' => now(),
            'updated_at' => now(),
        ]]);
        //
    }
}
