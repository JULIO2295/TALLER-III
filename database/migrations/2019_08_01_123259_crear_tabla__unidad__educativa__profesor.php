<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUnidadEducativaProfesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Unidad_Educativa_Profesor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Historial',200);
            $table->unsignedBigInteger('Profesor_id');
            $table->foreign('Profesor_id','fk_ProfesorUnidad_Educativa_Profesor_Profesor')->references('id')->on('Profesor')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('Unidad_Educativa_Profesor');
    }
}
