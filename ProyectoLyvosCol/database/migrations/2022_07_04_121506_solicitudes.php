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
        //
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipoIdentificacionSolicitud', ['CC', 'RC','TI','TE']);
            $table->integer('documentoIdentidadSolicitud');
            $table->string('nombresSolicitud');
            $table->string('primerApellidoSolicitud');
            $table->string('segundoApellidoSolicitud')->nullable();
            $table->string('correoElectronicoSolicitud')->nullable();
            $table->enum('tipodeCertificacionSolicitus', ['Certificado de estudios', 'Certificado de Notas','Boletines','Paz y salvo']);
            $table->integer('anoCertificacionSolicitud');
            $table->string('gradoSolicitud');
            $table->string('otrosSolicitud')->nullable();
            $table->string('comentariosSolicitud')->nullable();
            $table->string('descargarRecibo')->nullable();
            $table->string('cargarRecibo')->nullable();
  
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
};
