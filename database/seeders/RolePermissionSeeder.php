<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $adminPermissions = DB::table('permissions')->pluck('id');

        foreach ($adminPermissions as $permissionId) {
            DB::table('role_permissions')->insert([
                'role_id' => 1,
                'permission_id' => $permissionId
            ]);
        }

        // Coach permissions (limited)
        $coachPermissionNames = [
            'player_view','player_update',
            'team_view','match_view','match_update'
        ];

        $coachPermissions = DB::table('permissions')
            ->whereIn('name', $coachPermissionNames)
            ->pluck('id');

        foreach ($coachPermissions as $permissionId) {
            DB::table('role_permissions')->insert([
                'role_id' => 2,
                'permission_id' => $permissionId
            ]);
        }
    }
}
