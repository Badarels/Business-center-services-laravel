<?php

namespace Database\Seeders;

use Dotenv\Util\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Agent')->insert([
           /* 'nom' => 'Diop',
            'prenom' => 'Alioune',
            'datenaissance' => 'date()',
            'sexe' => Str::random(10),
            'ville' => Str::random(10),
            'adresse' => Str::random(10),
            'telephone1' => Str::random(10),
            'telephone2' => Str::random(10),
            'numeroPieceIdentite' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'photo' => Str::random(10),
            'role' => Str::random(10),*/
        ]);
    }
}
