<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        App\Region::create([

        	'name' => 'Enugu',
             'description' => 'A state in Nigeria',
        ]);

        App\Region::create([

        	'name' => 'Lagos',
             'description' => 'A state in Nigeria',
        ]);

         App\Region::create([

        	'name' => 'London',
             'description' => 'A state in Nigeria',
        ]);
    }
}
