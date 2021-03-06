<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Mockery\Generator\Parameter;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Question;
use App\Models\Answer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create()->each(function($u){
            $u->questions()
            ->saveMany(Question::factory(rand(3,7))->make())
            ->each(function($q){
                $q->answers()
                ->saveMany(Answer::factory(rand(1,5))->make());
            })   
        });
    }
}
