<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'role' => 'Admin',
            ],
            [
            'role' => 'Sales',
            ],
            [
            'role' => 'Purchasing',
            ],
            [
            'role' => 'Warehouse',
            ],
            [
            'role' => 'Route',
            ]
        ];
        DB::table('roles')->insert($data);
    }
}
