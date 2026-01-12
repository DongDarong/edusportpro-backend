<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'description' => 'System administrator with full access',
            ],
            [
                'id' => 2,
                'name' => 'coach',
                'description' => 'Coach responsible for teams, training, and attendance',
            ],
            [
                'id' => 3,
                'name' => 'player',
                'description' => 'Player with access to personal profile and performance',
            ],
        ]);
    }
}
