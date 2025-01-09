<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat roles dan permissions
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        $editPermission = Permission::create(['name' => 'edit users']);
        $deletePermission = Permission::create(['name' => 'delete users']);

        // Memberikan permissions ke role
        $adminRole->givePermissionTo([$editPermission, $deletePermission]);
        $userRole->givePermissionTo([$editPermission]);

        // Membuat pengguna dengan role admin
        $admin = User::create([
            'username' => 'Robi',
            'email' => 'robi@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        // Membuat pengguna lainnya dengan role user
        User::factory(100)->create()->each(function ($user) use ($userRole) {
            $user->assignRole($userRole); // Semua pengguna diberi role 'user'
        });
    }
}