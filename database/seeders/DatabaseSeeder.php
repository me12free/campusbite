<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Remove all users before seeding to avoid duplicates
        // Safely delete all users (avoid foreign key constraint issues)
        DB::table('users')->delete();

        // Seed admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@campusbite.com',
            'is_admin' => true,
            'password' => bcrypt('admin1234'),
        ]);

        // Seed student users
        User::factory(10)->create();

        // Optionally, add a specific student user for login testing
        User::factory()->create([
            'name' => 'Test Student',
            'email' => 'student@campusbite.com',
            'is_admin' => false,
            'password' => bcrypt('student1234'),
        ]);

        $this->call([
            \Database\Seeders\MenuSeeder::class,
            \Database\Seeders\BlogSeeder::class,
        ]);
    }
}
