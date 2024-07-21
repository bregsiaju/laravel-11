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
            'name' => 'Resep Makanan',
            'slug' => 'resep-makanan',
            'color' => 'orange'
        ]);

        Category::create([
            'name' => 'Tips Memasak',
            'slug' => 'tips-memasak',
            'color' => 'primary'
        ]);

        Category::create([
            'name' => 'Resep Minuman',
            'slug' => 'resep-minuman',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Tempat Kuliner',
            'slug' => 'tempat-kuliner',
            'color' => 'red'
        ]);
    }
}
