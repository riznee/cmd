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
            'slug' => 'services',
            'title' => 'Services',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar,',
            'visible' => 0,
        ]);

        DB::table('pages')->insert([
            'slug' => 'products',
            'title' => 'Products',
            'description' => 'When crafting a product description, you’ll want to sell the benefits, not the features. ',
            'visible' => 0,
        ]);

        DB::table('pages')->insert([
            'slug' => 'press-release',
            'title' => 'Press Releases',
            'description' => 'Announcements of new products and services can be a great way to expand brand awareness on the web',
            'visible' => 0,
        ]);

        DB::table('pages')->insert([
            'slug' => 'about',
            'title' => 'About Us',
            'description' => 'The About page is an opportunity to elaborate on your brand’s vision and accomplishments.',
            'visible' => 1,
        ]);
        
        
    }
}
