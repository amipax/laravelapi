<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Regiones;
use DB;

class RegionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        $faker = \Faker\Factory::create();
        DB::table('regiones')->truncate();

        for ($i=0; $i < 3; $i++) { 
         Regiones::create([
            'nombre' => $faker->state,
            'ordinal' => $faker->unique()->stateAbbr
            
         ]);
       } 
    }
}
