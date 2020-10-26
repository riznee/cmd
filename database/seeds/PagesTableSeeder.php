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
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar,',
            'visible' => 1,
        ]);
        
        DB::table('pages')->insert([
            'slug' => 'services',
            'title' => 'Services',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar,',
            'visible' => 0,
        ]);

        DB::table('pages')->insert([
            'slug' => 'products',
            'title' => 'Products',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar,',
            'visible' => 0,
        ]);

        DB::table('pages')->insert([
            'slug' => 'news',
            'title' => 'News',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar,',
            'visible' => 0,
        ]);

        DB::table('pages')->insert([
            'slug' => 'about',
            'title' => 'About Us',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar,',
            'visible' => 1,
        ]);
        
        
    }
}
