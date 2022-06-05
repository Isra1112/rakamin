<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        User::factory()->create([
            'name' => 'test',
            'email' => 'testt@example.com',
            'password' => Hash::make('123'),
        ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => '123',
        // ]);

        // User::factory()->create([
        //     'name' => 'John mayer',
        //     'email' => 'john@example.com',
        //     'password' => '123',
        // ]);

        // User::factory()->create([
        //     'name' => 'Didier Drogba',
        //     'email' => 'drogba@example.com',
        //     'password' => '123',
        // ]);

        // User::factory()->create([
        //     'name' => 'Zendaya',
        //     'email' => 'zendaya@example.com',
        //     'password' => '123',
        // ]);

        // User::factory()->create([
        //     'name' => 'Katheryn winnick',
        //     'email' => 'winnick@example.com',
        //     'password' => '123',
        // ]);

        // User::factory()->create([
        //     'name' => 'Bambang Pamungkas',
        //     'email' => 'bp@example.com',
        //     'password' => '123',
        // ]);

        

    }
}
