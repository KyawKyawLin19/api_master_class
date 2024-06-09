<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Ticket;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Ticket::factory(100)
        // ->recycle(User::factory(10)->create())
        // ->create();
        // Create 10 users
        $users = User::factory(10)->create();

        // Create 100 tickets associated with random users
        Ticket::factory(100)->create([
            'user_id' => $users->random()->id,
        ]);
    }
}
