<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('datenaissance');
            $table->char('sexe');
            $table->char('ville');
            $table->char('adresse');
            $table->string('telephone1');
            $table->string('telephone2')->nullable(); 
            $table->string('numeroPieceIdentite');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo');
            $table->string('role')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
