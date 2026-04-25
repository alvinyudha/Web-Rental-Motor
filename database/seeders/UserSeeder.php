<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id,
            'whatsapp' => '08123456789',
            'ktp_number' => '2313312311000276',
            'sim_number' => '1231324123321321',
            'avatar_url' => 'https://placehold.co/100x100',
            'status' => 'active',
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@s.com',
            'password' => Hash::make('password'),
            'role_id' => $userRole->id,
            'whatsapp' => '089876543210',
            'ktp_number' => '2983900283400123',
            'sim_number' => '9839284928349283',
            'avatar_url' => 'https://placehold.co/100x100',
            'status' => 'active',
        ]);
    }
}
