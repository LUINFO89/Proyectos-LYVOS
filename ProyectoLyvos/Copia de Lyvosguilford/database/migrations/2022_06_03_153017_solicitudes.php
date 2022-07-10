<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Solicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreSolicitud');
            $table->date('fecha');
            $table->enum('estado', ['Facturado', 'Sin Facturar', 'Pendiente']);
            $table->bigInteger('servicios_id')->unsigned();
            $table->bigInteger('clientes_id')->unsigned();
            $table->timestamps();
            $table->foreign('servicios_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete('cascade');
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
