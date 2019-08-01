<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaContenido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contenido', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre_Contenido',50);
            $table->string('Clase',50);
            $table->unsignedBigInteger('Modulos_id');
            $table->foreign('Modulos_id','fk_ModulosContenido_Modulos')->references('id')->on('Modulos')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('Contenido');
    }
}
