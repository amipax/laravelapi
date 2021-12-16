<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provincias;
use DB;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
         DB::table('provincias')->truncate();

        for ($i=0; $i < 2; $i++) { 
         Provincias::create([
            'nombre' => $faker->city,
            'region_id' => $faker->numberBetween(1,3)
            
            
         ]);
       } 
    }
}
