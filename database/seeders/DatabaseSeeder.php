<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => faker,
            'email' => 'test@example.com',
            'password' => '$2y$10$X3k1EmJxrtF6EISsbzs7gu1Lw.zh2T/6NQEeiuK6FEP0IswSDHNcK' // Password
        ]);
    }
}
