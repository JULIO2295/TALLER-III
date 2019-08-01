<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProfesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profesor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Usuario');
            $table->string('Password');
            $table->unsignedBigInteger('Persona_id');
            $table->foreign('Persona_id','fk_PersonaProfesor_Profesor')->references('id')->on('Persona')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('Rol_id');
            $table->foreign('Rol_id','fk_RolProfesor_Rol')->references('id')->on('Rol')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('Profesor');
    }
}
