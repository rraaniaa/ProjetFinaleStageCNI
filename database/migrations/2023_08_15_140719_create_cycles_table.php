<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cycles', function (Blueprint $table) {
            $table->id();
            $table->string('nom_entreprise');
            $table->string('num_action');
            $table->string('theme_formation');
            $table->boolean('droit_tirage_indiv')->nullable(false);
            $table->boolean('droit_tirage_collec')->nullable(false);
            $table->string('mode_formation')->nullable();
            $table->string('lieu_formation')->nullable();
            $table->string('gouvernorat')->nullable();
            $table->date('periode')->nullable();
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
        Schema::dropIfExists('cycles');
    }
}
