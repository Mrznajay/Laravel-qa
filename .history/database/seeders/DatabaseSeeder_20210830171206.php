<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Mockery\Generator\Parameter;
use App\Database\Seeders\User

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(parameters:20)->create()->each(function($user){

        });
    }
}
