<?php

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
         $this->call(onlinelearning_category::class);
         
    }
    public function run()
    {
         
         $this->call(onlinelearning_posts::class);
    }
}
