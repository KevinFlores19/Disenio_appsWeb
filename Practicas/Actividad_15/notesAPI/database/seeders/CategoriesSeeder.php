<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Categories;
        $category->category_name = "Liga MX";
        $category->save();

        $category = new Categories;
        $category->category_name = "LaLiga Española";
        $category->save();

        $category = new Categories;
        $category->category_name = "Premier League";
        $category->save();

        $category = new Categories;
        $category->category_name = "MLS";
        $category->save();

        $category = new Categories;
        $category->category_name = "Bundesliga";
        $category->save();

    }
}
