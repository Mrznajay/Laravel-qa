<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Mockery\Generator\Parameter;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(<div class="parameters"></div>:20)->create()->each(function($user){

        });
    }
}
