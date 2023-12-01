<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\AdminUser::create([
            'name' => '超级管理员',
            'username' => 'admin',
            'password' => password_hash('123456',PASSWORD_DEFAULT),
            'avatar' => 'admin_default.png',
            'status' => 1,
        ]);
    }
}
