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
        \App\Models\User::factory(10)->create();
        'user_id' => Region::pluck('id')->random()
 ######### OR #########
$regions = Region::pluck('id');
'region_id' => $this->faker->randomElement($regions);
        
    }
}
