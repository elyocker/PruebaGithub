<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo');
            $table->foreign('id_usuarios')->references('id')->on('usuarios');
            $table->foreign('id_productos')->references('id')->on('productos');
            $table->foreign('id_sucursal')->references('id')->on('sucursales');
            $table->foreign('id_proveedor')->references('id')->on('proveedores');
            $table->foreign('id_empresa')->references('id')->on('empresas');
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
        Schema::dropIfExists('bodegas');
    }
}
