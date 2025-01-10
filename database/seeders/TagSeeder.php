<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Laravel', 'user_id' => null],
            ['name' => 'PHP', 'user_id' => null],
            ['name' => 'JavaScript', 'user_id' => null],
            ['name' => 'Développement Web', 'user_id' => null],
            ['name' => 'Design UX', 'user_id' => null],
            ['name' => 'Innovation', 'user_id' => null],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
