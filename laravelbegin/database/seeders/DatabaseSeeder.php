<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pesantren;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Kota::factory(10)->create();

        Pesantren::factory(100)->create();

        User::factory(200)->create();

    }
}

// User::factory()->create([
//     'name' => 'Test User',
//     'email' => 'test@example.com',
// ]);
