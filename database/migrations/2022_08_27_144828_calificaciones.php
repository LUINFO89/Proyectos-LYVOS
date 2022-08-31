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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_identidad_alumno')->unsigned()->nullable();;
            $table->string('alumno');
            $table->bigInteger('id_asignatura_estudiante')->unsigned()->nullable();
            $table->text('materia');
            $table->double('nota1');
            $table->double('nota2');
            $table->double('nota3');
            $table->double('nota4');
            $table->double('nota_final');
            $table->bigInteger('id_curso_estudiante')->unsigned()->nullable();

             $table->foreign('id_asignatura_estudiante')->references('id')->on('asignaturas')->onDelete('cascade');
            $table->foreign('id_curso_estudiante')->references('id')->on('grados')->onDelete('cascade');
            $table->foreign('id_identidad_alumno')->references('id')->on('alumnos')->onDelete('cascade');



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
