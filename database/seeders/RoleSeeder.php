<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
          [
              'title' => 'Super Admin',
              'code' => 'super_admin',
              'description' => "A accès à toutes les fonctionnalités et paramètres de l'application.",
              'status' => true
          ],
          [
              'title' => 'User',
              'code' => 'user',
              'description' => "Accès limité aux fonctionnalités de base de l'application.",
              'status' => true
          ]
        ];
        foreach ($roles as $role) {
            \App\Models\Role::firstOrCreate($role);
        }
    }
}
