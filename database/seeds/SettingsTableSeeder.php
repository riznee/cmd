<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'logo' => null,
            'site_name' => null,
            'email' => null,
            'facebook' => null,
            'twitter' => null,
            'disqus_shortname' => null,
            'display_login_buttion' => false,
            'display_title_site' => false,
            'display_article_descirption' => false,

        ]);
    }
}
