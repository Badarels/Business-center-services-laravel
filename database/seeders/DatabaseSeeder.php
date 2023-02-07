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

       $this->call(roleSeeder::class);

        User::find(1)->role()->attach(1);
        User::find(2)->role()->attach(2);
        User::find(3)->role()->attach(3);
        User::find(4)->role()->attach(4);
        //User::find(3)->role()->sync([2]);

       /* $user = User::find(1);
        $user->roles()->attach(2); // Affecte le rôle 2 à l'utilisateur 1
        $user->roles()->detach(2); // Retire le rôle 2 de l'utilisateur 1
        $user->roles()->sync([1, 3]); // Affecte les rôles 1 et 3 à l'utilisateur 1 en retirant les autres
       */
    }
}
