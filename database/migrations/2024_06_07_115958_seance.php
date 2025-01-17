<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Seance', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('jour');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->string('salle_id');

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
        Schema::dropIfExists('SalleClasse');
    }
};
