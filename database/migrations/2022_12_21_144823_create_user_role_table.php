<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->Id();
            $table->string('detail_role');
            $table->foreignId('user_id')->default(0);
            $table->foreignId('role_id')->default(0);
    
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_role', function (Blueprint $table) {
            $table->dropConstrainedForeign(['user_id', 'role_id']);
         });
         
        Schema::dropIfExists('user_role');
    }
}
