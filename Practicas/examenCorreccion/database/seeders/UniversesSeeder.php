<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'universe_name' => 'Universe ChampionsLeague',
            ],
            [
            'universe_name' => 'Universe EuropaLeague',
            ],
            [
            'universe_name' => 'Universe ConferenceLeague'   
            ]
        ];
        DB::table('universes')->insert($data);
    }
}
