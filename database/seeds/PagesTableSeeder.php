<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'slug' => 'team',
            'title' => 'Team',
            'description' => ' Provides information about the company',
        ]);

        DB::table('pages')->insert([
            'slug' => 'contact',
            'title' => 'Contact Us',
            'description' => ' Provides information on contactus information and collect user information',
        ]);

        DB::table('pages')->insert([
            'slug' => 'services',
            'title' => 'Services',
            'description' => 'Provide all the service information ',
        ]);

        DB::table('pages')->insert([
            'slug' => 'protfolio',
            'title' => 'Protfolio',
            'description' => 'Provide information of the finish products and projects ',
        ]);
    }
}
