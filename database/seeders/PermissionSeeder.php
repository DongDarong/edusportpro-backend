<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            ['name'=>'user_view','module'=>'users','description'=>'View user list'],
            ['name'=>'user_create','module'=>'users','description'=>'Create users'],
            ['name'=>'user_update','module'=>'users','description'=>'Update users'],
            ['name'=>'user_delete','module'=>'users','description'=>'Delete users'],

            ['name'=>'role_view','module'=>'roles','description'=>'View roles'],
            ['name'=>'role_manage','module'=>'roles','description'=>'Manage roles'],
            ['name'=>'permission_manage','module'=>'permissions','description'=>'Assign permissions'],

            ['name'=>'player_view','module'=>'players','description'=>'View players'],
            ['name'=>'player_create','module'=>'players','description'=>'Create players'],
            ['name'=>'player_update','module'=>'players','description'=>'Update players'],
            ['name'=>'player_delete','module'=>'players','description'=>'Delete players'],

            ['name'=>'coach_view','module'=>'coaches','description'=>'View coaches'],
            ['name'=>'coach_create','module'=>'coaches','description'=>'Create coaches'],
            ['name'=>'coach_update','module'=>'coaches','description'=>'Update coaches'],
            ['name'=>'coach_delete','module'=>'coaches','description'=>'Delete coaches'],

            ['name'=>'team_view','module'=>'teams','description'=>'View teams'],
            ['name'=>'team_create','module'=>'teams','description'=>'Create teams'],
            ['name'=>'team_update','module'=>'teams','description'=>'Update teams'],
            ['name'=>'team_delete','module'=>'teams','description'=>'Delete teams'],

            ['name'=>'match_view','module'=>'matches','description'=>'View matches'],
            ['name'=>'match_create','module'=>'matches','description'=>'Create matches'],
            ['name'=>'match_update','module'=>'matches','description'=>'Update matches'],
            ['name'=>'match_delete','module'=>'matches','description'=>'Delete matches'],
        ];

        DB::table('permissions')->insert($permissions);
    }
}
