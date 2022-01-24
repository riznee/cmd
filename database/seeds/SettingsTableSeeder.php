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
            'id'=>1,
           'logo'=>'http://enol.test/enol/img/logoipsum-logo-55.svg',
           'email'=>'example@enol.mv',
           'facebook'=>'facebook.com',
           'twitter'=>'twitter.com',
           'linkin'=>'linkin.com',
           'instagram'=>'instragram.com',
           'page_name'=>'program.com',
        ]);
        
        
    }

        
}