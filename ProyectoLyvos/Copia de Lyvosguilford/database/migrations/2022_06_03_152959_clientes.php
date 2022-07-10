<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('identificacion');
            $table->string('nombresCliente');
            $table->string('apellidosCliente');
            $table->bigInteger('telefono');
            $table->string('direccion');
            $table->string('correo');

            $table->string('genero');
            $table->bigInteger('servicios_id')->unsigned();
            $table->timestamps();
            $table->foreign('servicios_id')->references('id')->on('servicios')->onDelete('cascade');
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
    }
}
