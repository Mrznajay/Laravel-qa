<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Question;
use App\Models\Answer;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorites')->delete();
        
        $user = User::pluck('id')->all();
        $numberOfUser = count($user);

        foreach(Question::all() as $question) {
            
            for($i = 0; $i<rand())
        }
    }
}
