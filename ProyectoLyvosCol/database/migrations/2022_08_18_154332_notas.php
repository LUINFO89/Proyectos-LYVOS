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
        Schema::create('notas', function (Blueprint $table) {

            $table->bigIncrements('id');
           
            $table->string('nombre_estudiante');
            $table->bigInteger('id_asignatura_estudiante')->unsigned()->nullable();
            $table->bigInteger('id_curso_estudiante')->unsigned()->nullable();
            $table->biginteger('id_identidad_alumno')->unsigned();
            $table->bigInteger('id_profesor')->unsigned()->nullable();

            $table->string('email_estudiante');
            $table->integer('nota1');
            $table->integer('nota2');
            $table->integer('nota3');
            $table->integer('nota4');
            $table->integer('nota_final');
            $table->string('estado');
            
            $table->foreign('id_asignatura_estudiante')->references('id')->on('asignaturas')->onDelete('cascade');
            $table->foreign('id_curso_estudiante')->references('id')->on('grados')->onDelete('cascade');
            $table->foreign('id_identidad_alumno')->references('id')->on('alumnos')->onDelete('cascade');
            $table->foreign('id_profesor')->references('id')->on('profesores')->onDelete('cascade');

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
