<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Mockery\Generator\Parameter;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create()->each(function($q){
            $q->questions()
            ->saveMany(Question::factory(rand(3,7))->make())
            ->each(function)    
        });
    }
}
