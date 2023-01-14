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
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('datenaissance');
            $table->String('sexe');
            $table->String('ville');
            $table->String('adresse');
            $table->string('telephone1')->unique();;
            $table->string('telephone2')->nullable()->unique();; 
            $table->string('numeroPieceIdentite');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo')->nullable(); 
            $table->integer('role');
           // $table->enum('role',['Administrateur', 'Agent'])->default('Administrateur');
            $table->foreignId('users_id')->default(1)->constrained('users');
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
