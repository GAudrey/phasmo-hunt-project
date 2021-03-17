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
        // \App\Models\User::factory(10)->create();
        $this->call(TObjectivesTableSeeder::class);
        $this->call(TFirstnameTableSeeder::class);
        $this->call(TLastnameTableSeeder::class);
        $this->call(TGhostsTableSeeder::class);
        $this->call(TCluesTableSeeder::class);
        $this->call(GhostsHasCluesTableSeeder::class);
    }
}
