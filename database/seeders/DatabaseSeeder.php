<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BlogSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<200; $i+=1){
            $this->call([
                BlogSeeder::class
            ]);
        }
        
        // User::factory(10)->create();
    }
}
