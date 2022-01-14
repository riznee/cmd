<?php

use Illuminate\Database\Seeder;

class PageLayoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        DB::table('pagelayouts')->insert([

            'type' => 'default',
            'name' => 'Show ',
            
        ]);    

        
    }
}
