<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Provincias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('provincias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            // $table->integer('id_region')->unsigned();
            $table->unsignedBigInteger('id_region');
            $table->foreign('id_region')->references('id')->on('regiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('provincias');
    }
}
