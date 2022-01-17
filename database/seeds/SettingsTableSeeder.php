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
            'id' => 1,
            'key'=>'logo',
            'value'=> 'null'
        ]);
        
        DB::table('settings')->insert([
            'id' => 2,
            'key'=>'site_name',
            'value'=> 'null'
        ]);
        DB::table('settings')->insert([
            'id' => 3,
            'key'=>'email',
            'value'=> 'null'
        ]);
            
        DB::table('settings')->insert([
            'id' => 4,
            'key'=>'facebook',
            'value'=> 'null'
        ]);
        DB::table('settings')->insert([
            'id' => 5,
            'key'=>'twitter',
            'value'=> 'null'
        ]);
        
        DB::table('settings')->insert([
            'id' => 6,
            'key'=>'displayshortname',
            'value'=> 'false'
        ]);

        DB::table('settings')->insert([
            'id' => 7,
            'key'=>'displayLoginform',
            'value'=> 'false'
        ]);
        DB::table('settings')->insert([
            'id' => 8,
            'key'=>'display_title_site',
            'value'=> 'false'
        ]);

        DB::table('settings')->insert([
            'id' => 9,
            'key'=>'display_article_descirption',
            'value'=> 'false'
        ]);
    }

        
}