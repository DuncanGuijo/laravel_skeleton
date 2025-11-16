<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        $token = $user->createToken('dev-test')->plainTextToken;

        $this->command->info('Seeded user:');
        $this->command->info('  Email:    test@example.com');
        $this->command->info('  Password: password');
        $this->command->info('  Token:    ' . $token);
    }
}
