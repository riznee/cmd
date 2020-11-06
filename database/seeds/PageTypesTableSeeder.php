<?php

use Illuminate\Database\Seeder;

class PagesTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        DB::table('pagetypes')->insert([
            'slug' => 'time-line',
            'title' => 'Time Line',
            'description' => 'Show ',
            
        ]);        
       
        DB::table('pagetypes')->insert([
            'slug' => 'article',
            'title' => 'Article',
            'description' => 'article ',
        ]);

        DB::table('pagetypes')->insert([
            'slug' => 'gallary',
            'title' => 'Gallery',
            'description' => 'Show cacse ',
        ]);


        
    }
}
