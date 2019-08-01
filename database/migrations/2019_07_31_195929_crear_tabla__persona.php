<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Persona', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Nombre',45);
            $table->String('Apellido',45);
            $table->String('Ci',45);
            $table->String('Direccion',45);
            $table->String('Genero',45);
            $table->String('Telefono',45);
            $table->String('Fecha_Nacimiento',45);
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
        Schema::dropIfExists('Persona');
    }
}
