<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userroleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('user_role')->insert([
            ['detail_role' => 'Administrateur'],
            ['detail_role' => 'Agent'],
           
         ]);
       
    }
}
