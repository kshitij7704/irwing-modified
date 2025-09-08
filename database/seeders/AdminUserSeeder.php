<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create or fetch the admin role
        $adminRole = Role::firstOrCreate(
            ['name' => 'admin', 'guard_name' => 'web']
        );

        // Define permissions
        $permissions = [
            'view users', 'create users', 'edit users', 'delete users',
            'view roles', 'create roles', 'edit roles', 'delete roles',
            'view permissions', 'create permissions', 'edit permissions', 'delete permissions',
            'view blogs', 'create blogs', 'edit blogs', 'delete blogs',
            'view news', 'create news', 'edit news', 'delete news',
            'view pages', 'create pages', 'edit pages', 'delete pages',
            'view gallery', 'create gallery', 'edit gallery', 'delete gallery',
            'view leads', 'create leads', 'edit leads', 'delete leads',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        // Assign all permissions to admin role
        $adminRole->syncPermissions(Permission::all());

        // Create or fetch admin user
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@ailifebot.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'profile' => 'admin',
                'phone' => '+1234567890',
                'status' => 'active',
            ]
        );

        // Assign admin role to admin user
        if (!$adminUser->hasRole('admin')) {
            $adminUser->assignRole($adminRole);
        }

        $this->command->info('Admin user created or already exists.');
        $this->command->info('Email: admin@ailifebot.com');
        $this->command->info('Password: password');
    }
}
