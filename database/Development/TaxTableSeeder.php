<?php

use Illuminate\Database\Seeder;

class TaxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        DB::table('tax')->insert([
            'tax' => 'GST',
            'tax_perce' => 6,
            'visible' => 0,
        ]);        
        
    }
}
