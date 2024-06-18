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
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'Test Two',
            'email' => 'test2@example.com',
            'password' => 'password',
        ]);

        Listing::factory(20)->create([
            'by_user_id' => 1,
        ]);
    }
}
