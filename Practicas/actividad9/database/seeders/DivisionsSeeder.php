<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'Conference' => 'American',
            'Division' => 'AFC North',
            ],
            [
            'Conference' => 'American',
            'Division' => 'AFC South',
            ],
            [
            'Conference' => 'American',
            'Division' => 'AFC East',
            ],
            [
            'Conference' => 'American',
            'Division' => 'AFC West',
            ],
                [
                'Conference' => 'National',
                'Division' => 'NFC North',
                ],
                [
                'Conference' => 'National',
                'Division' => 'NFC South',
                ],
                [
                'Conference' => 'National',
                'Division' => 'NFC East',
                ],
                [
                'Conference' => 'National',
                'Division' => 'NFC West',
                ]
        ];
        DB::table('divisions')->insert($data);
    }
}
