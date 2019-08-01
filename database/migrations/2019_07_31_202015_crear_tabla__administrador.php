<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAdministrador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Administrador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Persona_id');
            $table->foreign('Persona_id','fk_PersonaAdministrador_Persona')->references('id')->on('Persona')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('Rol_id');
            $table->foreign('Rol_id','fk_RolAdministrador_Rol')->references('id')->on('Rol')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('Administrador');
    }
}
