<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $userRole = Role::create(['name' => 'user']);
        // $adminRole = Role::create(['name' => 'admin']);
        // $writeRole = Role::create(['name' => 'writer']);

        User::create([
            'name' => 'Jimmy Write',
            'email' => 'jimmy@admin.com',
            'password' => bcrypt('password'),
            'role_id' => 3
        ]);
    }
}
