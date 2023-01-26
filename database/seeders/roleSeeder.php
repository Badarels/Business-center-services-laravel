<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('roles')->insert([
            ['detail_roles' => 'Super Administrateur'],
            ['detail_roles' => 'Administrateur'],
            ['detail_roles' => 'Agent'],
            ['detail_roles' => 'Supperviseur'],
           
         ]);
         
    }
}
