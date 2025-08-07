<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenericCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Identification Personnelle', 'user_id' => null],
            ['name' => 'Immatriculation & Facturation', 'user_id' => null],
            ['name' => 'Actualités', 'user_id' => null],
            ['name' => 'Divertissement', 'user_id' => null],
            ['name' => "Bourses d'études", 'user_id' => null],
        ];

        foreach ($categories as $category) {
            \App\Models\GenericCategory::create($category);
        }
    }
}
