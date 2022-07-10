<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Facturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('solicitud_id')->unsigned()->nullable();
            $table->bigInteger('clientes_id')->unsigned();
            $table->bigInteger('identificacion');
            $table->string('nombresCliente');
            $table->string('apellidosCliente');
            $table->bigInteger('telefono');
            $table->string('direccion');
            $table->string('correo');
            $table->bigInteger('servicios_id')->unsigned();
            $table->string('detalleFactura');
            $table->bigInteger('cantidad');
            $table->bigInteger('total');
            $table->string('observaciones');
            $table->enum('estado', ['Facturado', 'Sin Facturar', 'Pendiente']);
            $table->timestamps();

            $table->foreign('servicios_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('solicitud_id')->references('id')->on('solicitudes')->onDelete('cascade');

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
