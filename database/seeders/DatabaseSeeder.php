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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Jeisson Martinez',
            'email' => 'j@admin.com',
            'password' => bcrypt('1234'),
        ]);

        factory(\App\Models\User::class, 24)->create();
    }
}
