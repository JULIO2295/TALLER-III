<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEstudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Estudiante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Persona_id');
            $table->foreign('Persona_id','fk_PersonaEstudiante_Persona')->references('id')->on('Persona')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('Discapacidad_id');
            $table->foreign('Discapacidad_id','fk_DiscapacidadEstudiante_Discapacidad')->references('id')->on('Discapacidad')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('Estudiante');
    }
}
