<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRolPermiso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rol_Permisos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Permisos_id');
            $table->foreign('Permisos_id','fk_PermisosRol_Permisos_Permisos')->references('id')->on('Permisos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('Rol_id');
            $table->foreign('Rol_id','fk_RolRol_Permisos_Rol')->references('id')->on('Rol')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('Rol_Permisos');
    }
}
