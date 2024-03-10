<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConferencesSeeder extends Seeder
{
   
    public function run(): void
    {
        $data = [
            [
            'title' => 'Conference 1',
            'conf' => 'AFC',
            ],
            [
            'title' => 'Conference 2',
            'conf' => 'NFC',
            ]
        ];
        DB::table('Conferences')->insert($data);
    }
}
