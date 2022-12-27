<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezVousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendez-vous', function (Blueprint $table) {
            $table->id();
            $table->string('detail_rendez-vous');
            $table->date('date_rendez-vous');
            $table->foreignId('agent_id');
            $table->timestamps();
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
        Schema::table('rendez-vous', function (Blueprint $table) {
            $table->dropConstrainedForeignId('agent_id');
        });
    }
}
