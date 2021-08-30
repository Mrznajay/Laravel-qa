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
        \App\Models\User::factory(10)->create()->each(function ($ability) {
            $ability->model()->attach(factory(Model::class, rand(1, 5))->create());
        });
        
    }
}
