<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDiscapacidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Discapacidad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Nombre_Disc',45);
            $table->String('Descripcion',45);
            $table->String('Grado',45);
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
        Schema::dropIfExists('Discapacidad');
    }
}
