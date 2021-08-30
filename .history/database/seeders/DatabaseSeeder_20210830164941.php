<?php

namespace Database\Seeders;

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
        $user = \App\Models\User::factory(1)->create()->first();
        $product = \App\Models\Product::factory(1)->create(['user_id' => $user->id])->first();
    }
}
