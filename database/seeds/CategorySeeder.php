<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Category::create([

        	'name' => 'Technology',
        ]);

         App\Category::create([

        	'name' => 'Blockchain',
        ]);



         App\Category::create([

        	'name' => 'Fashion',
        ]);
    }
}
