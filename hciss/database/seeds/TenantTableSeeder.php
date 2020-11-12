<?php

use Illuminate\Database\Seeder;

class TenantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        App\Models\Tenant::create([

        	'name' => 'SmarfPos',
        ]);

        App\Models\Tenant::create([

        	'name' => 'Dummy',
        ]);
    }
}
