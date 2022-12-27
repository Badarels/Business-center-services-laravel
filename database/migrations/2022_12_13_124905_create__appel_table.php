<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appel', function (Blueprint $table) {
            $table->id();
            $table->string('detail_appel');
            $table->date('date_appel');
            $table->foreignId('agent_id')->contrained();
            $table->foreignId('rendez-vous_id')->contrained();
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
        Schema::table('appel', function (Blueprint $table) {
            $table->dropConstrainedForeign(['agent_id','rendez-vous_id']);
        });
        Schema::dropIfExists('_appel');
    }
}
