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
        $q = \App\Models\Question::factory(1)->create(['user_id' => $user->id])->make();
    }
}
