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
<<<<<<< HEAD
            'active' => true
=======
            'visible' => 1,
>>>>>>> ba0249a14fe7e772911c34393518b68dbf39f09f
        ]);
        
        DB::table('pages')->insert([
            'slug' => 'services',
            'title' => 'Services',
<<<<<<< HEAD
            'active' => true
=======
            'visible' => 0,
>>>>>>> ba0249a14fe7e772911c34393518b68dbf39f09f
        ]);

        DB::table('pages')->insert([
            'slug' => 'products',
            'title' => 'Products',
<<<<<<< HEAD
            'active' => false
=======
            'visible' => 0,
>>>>>>> ba0249a14fe7e772911c34393518b68dbf39f09f
        ]);

        DB::table('pages')->insert([
            'slug' => 'news',
            'title' => 'News',
<<<<<<< HEAD
            'active' => false
=======
            'visible' => 0,
>>>>>>> ba0249a14fe7e772911c34393518b68dbf39f09f
        ]);

        DB::table('pages')->insert([
            'slug' => 'about',
            'title' => 'About Us',
<<<<<<< HEAD
            'active' => true,
=======
            'visible' => 1,
>>>>>>> ba0249a14fe7e772911c34393518b68dbf39f09f
        ]);
        
        
    }
}
