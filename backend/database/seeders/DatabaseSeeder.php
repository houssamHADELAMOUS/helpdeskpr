<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create demo users
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('Admin123!'),
            'role' => User::ROLE_ADMIN
        ]);

        User::create([
            'name' => 'Support Agent',
            'email' => 'agent@example.com',
            'password' => Hash::make('Agent123!'),
            'role' => User::ROLE_AGENT
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('User123!'),
            'role' => User::ROLE_USER
        ]);

        // Create FAQs
        Faq::factory()->count(25)->create();

        // Create tickets with replies
        Ticket::factory()->count(30)->create();
    }
}
