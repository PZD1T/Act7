<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            [
            'conf' => 'American',
            'divsn' => 'AFC North',
            ],
            [
            'conf' => 'American',
            'divsn' => 'AFC South',
            ],
            [
            'conf' => 'American',
            'divsn' => 'AFC East',
            ],
            [
            'conf' => 'American',
            'divsn' => 'AFC West',
            ],
                [
                'conf' => 'National',
                'divsn' => 'NFC North',
                ],
                [
                'conf' => 'National',
                'divsn' => 'NFC South',
                ],
                [
                'conf' => 'National',
                'divsn' => 'NFC East',
                ],
                [
                'conf' => 'National',
                'divsn' => 'NFC West',
                ]
        ];
        DB::table('Divisions')->insert($data);
    }
}
