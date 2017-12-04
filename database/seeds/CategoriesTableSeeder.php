<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        Category::create([
            'name' => 'Imprimante 3D',
        ]);
        Category::create([
            'name' => 'Découpe laser',
        ]);
        Category::create([
            'name' => 'Brodeuse Numérique',
        ]);
        Category::create([
            'name' => 'Fraiseuse CNC',
        ]);
        Category::create([
            'name' => 'Raspberry Arduino',
        ]);
    }
}