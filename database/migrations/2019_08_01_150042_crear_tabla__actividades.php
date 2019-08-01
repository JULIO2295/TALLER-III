<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaActividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Actividades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Ponderacion',20);
            $table->unsignedBigInteger('Calificacion_id');
            $table->foreign('Calificacion_id','fk_CalificacionActividades_Calificacion')->references('id')->on('Calificacion')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('Modulos_id');
            $table->foreign('Modulos_id','fk_ModulosActividades_Modulos')->references('id')->on('Modulos')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('Actividades');
    }
}
