<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'Title' => 'Conferencia1',
            'Conference' => 'AFC',
            ],
            [
            'Title' => 'Conferencia2',
            'Conference' => 'NFC',
            ]
        ];
        DB::table('conferences')->insert($data);
    }
}
