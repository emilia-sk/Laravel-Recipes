<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([ //Admin(default) user that owns seeded recipes
            'name' => 'Admin',
            'email' => 'admin@mail.com'
        ]);

        Recipe::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
