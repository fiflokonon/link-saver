<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@linksaver.net',
            'password' => bcrypt('P@ssw0rd123'),
            'role_id' => 1, // Assuming 1 is the ID for the admin role
            'country_id' => null,
            'phone' => '1234567890',
            'status' => true,
            'verified' => true,
        ]);
    }
}
