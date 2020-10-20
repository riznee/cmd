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
            'active' => true
        ]);
        
        DB::table('pages')->insert([
            'slug' => 'services',
            'title' => 'Services',
            'active' => true
        ]);

        DB::table('pages')->insert([
            'slug' => 'products',
            'title' => 'Products',
            'active' => false
        ]);

        DB::table('pages')->insert([
            'slug' => 'news',
            'title' => 'News',
            'active' => false
        ]);

        DB::table('pages')->insert([
            'slug' => 'about',
            'title' => 'About Us',
            'active' => true,
        ]);
        
        
    }
}
