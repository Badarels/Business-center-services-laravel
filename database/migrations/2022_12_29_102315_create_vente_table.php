<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vente', function (Blueprint $table) {
            $table->id();
            $table->string('detail');
            $table->date('date_du_vente');
            $table->foreignId('agent_id')->contrained();
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
        Schema::table('vente', function (Blueprint $table) {
            $table->dropConstrainedForeign('agent_id');
        });
        Schema::dropIfExists('vente');
    }
}
