<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Calles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            // $table->integer('id_ciudad')->unsigned();
            $table->unsignedBigInteger('id_ciudad');

            $table->foreign('id_ciudad')->references('id')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calles');
    }
}
