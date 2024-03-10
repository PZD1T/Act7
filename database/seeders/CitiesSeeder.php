<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CitiesSeeder extends Seeder
{

    public function run(): void
    {
       \App\Models\Cities::factory(20)->create();
    }
}
