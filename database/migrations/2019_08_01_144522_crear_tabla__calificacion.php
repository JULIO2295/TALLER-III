<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCalificacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Calificacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Valor',45);
            $table->unsignedBigInteger('Estudiante_id');
            $table->foreign('Estudiante_id','fk_EstudianteCalificacion_Estudiante')->references('id')->on('Estudiante')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('Calificacion');
    }
}
