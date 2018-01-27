<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\student::class,10)->create();
        factory(App\teach::class,10)->create();
        factory(App\subject::class,10)->create();
        factory(App\attendence::class,10)->create();
        factory(App\time_table::class,10)->create();
    
    }
}
