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
            $table->bigInteger('estudiante_id')->unsigned();
            $table->bigInteger('curso_id')->unsigned();
            $table->double('nota1');
            $table->double('nota2');
            $table->double('nota3');
            $table->double('nota4');
            $table->double('nota5');
            $table->double('notafinal');



            $table->timestamps();
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
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
