<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test One',
            'email' => 'test1@example.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'Test Two',
            'email' => 'test2@example.com',
            'password' => 'password',
        ]);

        Listing::factory(10)->create([
            'by_user_id' => 1,
        ]);

        Listing::factory(10)->create([
            'by_user_id' => 2,
        ]);

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password',
            'is_admin' => true,
        ]);
    }
}
