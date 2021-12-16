<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ciudades;
use DB;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('ciudades')->truncate();

       for ($i=0; $i < 5; $i++) { 
        Ciudades::create([
           'nombre' => $faker->streetName,
           'provincia_id' => $faker->numberBetween(1,2)
          
        ]);
      } 
    }
}
