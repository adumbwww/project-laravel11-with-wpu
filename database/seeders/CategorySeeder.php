<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'E-sport',
            'slug' => 'esport',
            'color' => 'yellow',
        ]);
    }
}
