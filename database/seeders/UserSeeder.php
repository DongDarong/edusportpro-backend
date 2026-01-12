<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'name' => 'System Admin',
                'email' => 'admin@edusportpro.com',
                'password' => Hash::make('admin123456'),
                'phone' => '012000001',
                'status' => 'active'
            ],
            [
                'role_id' => 2,
                'name' => 'Coach Sok Dara',
                'email' => 'coach@edusportpro.com',
                'password' => Hash::make('coach123456'),
                'phone' => '012000002',
                'status' => 'active'
            ],
            [
                'role_id' => 3,
                'name' => 'Player Vannak',
                'email' => 'player@edusportpro.com',
                'password' => Hash::make('player123456'),
                'phone' => '012000003',
                'status' => 'active'
            ],
        ]);
    }
}
