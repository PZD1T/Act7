<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cities; 

class TeamsSeeder extends Seeder
{
  
    public function run(): void
    {
        $cities = Cities::all(); 

        \App\Models\Teams::factory(32)->create()->each(function ($team) use ($cities) {
            $city = $cities->random(); 
            $team->id_city = $city->id; 
            $team->save(); 
        });
    }
}

