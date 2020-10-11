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
            'slug' => 'home',
            'title' => 'Home',
            'description' => ' Provides information about the company',
        ]);
        
        DB::table('pages')->insert([
            'slug' => 'services',
            'title' => 'Services',
            'description' => ' Provides information on contactus information and collect user information',
        ]);

        DB::table('pages')->insert([
            'slug' => 'products',
            'title' => 'Products',
            'description' => 'Provide all the service information ',
        ]);

        DB::table('pages')->insert([
            'slug' => 'news',
            'title' => 'News',
            'description' => ' Provides information about the company',
        ]);

        DB::table('pages')->insert([
            'slug' => 'about',
            'title' => 'About Us',
            'description' => 'Provide information of the finish products and projects ',
        ]);
        
        
    }
}
