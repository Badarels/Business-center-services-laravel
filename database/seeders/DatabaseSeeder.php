<?php

namespace Database\Seeders;


use App\Models\Administrateur;
use App\Models\Agent;
use App\Models\Campagne;
use App\Models\User;
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
        User::factory(10)->create();
        Administrateur::factory(10)->create();
        Agent::factory(10)->create();
        Campagne::factory(10)->create();

       $this->call(userroleSeeder::class);

    }
}
