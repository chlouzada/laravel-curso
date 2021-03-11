<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        User::factory()->create([
            'name' => 'Carlos',
            'email' => 'carlos@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'), // password
            'remember_token' => Str::random(10),
        ]);
        
        $this->call([PostsTableSeeder::class]);
        $this->call([TagTableSeeder::class]);

    }
}
