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
            $table->enum('Genero', ['Masculino', 'Femenino'])->nullable();
            $table->bigInteger('servicios_id')->unsigned();
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
        //
    }
}
