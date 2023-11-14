<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'Administrator']);
        $permission = Permission::create(['name' => 'manage student']);
        $permission->assignRole($adminRole);
 
        $adminUser = User::where('email', '=', 'admin@example.com')->first();
        $adminUser->assignRole('Administrator');
    }
}
