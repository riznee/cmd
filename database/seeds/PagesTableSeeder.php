<?php

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\PseudoTypes\False_;

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
            'visible' => true,
        ]);
        
        DB::table('pages')->insert([
            'slug' => 'services',
            'title' => 'Services',
            'visible' => false,
        ]);

        DB::table('pages')->insert([
            'slug' => 'products',
            'title' => 'Products',
            'visible' => false,
        ]);

        DB::table('pages')->insert([
            'slug' => 'news',
            'title' => 'News',
            'visible' => true,
        ]);

        DB::table('pages')->insert([
            'slug' => 'about',
            'title' => 'About Us',
            'visible' => true,
        ]);
        
        
    }
}
