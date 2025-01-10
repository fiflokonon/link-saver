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
        $categories = [
            ['name' => 'Technologie', 'user_id' => null],
            ['name' => 'Science', 'user_id' => null],
            ['name' => 'Actualités', 'user_id' => null],
            ['name' => 'Divertissement', 'user_id' => null],
            ['name' => 'Education', 'user_id' => null],
            ['name' => 'Voyages', 'user_id' => null],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
