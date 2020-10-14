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
            $table->bigInteger('id_usuarios')->unsigned();
            $table->foreign('id_usuarios')->references('id')->on('usuarios');
            $table->bigInteger('id_productos')->unsigned();
            $table->foreign('id_productos')->references('id')->on('productos');
            $table->bigInteger('id_sucursal')->unsigned();
            $table->foreign('id_sucursal')->references('id')->on('sucursales');
            $table->bigInteger('id_proveedor')->unsigned();
            $table->foreign('id_proveedor')->references('id')->on('proveedores');
            $table->bigInteger('id_empresa')->unsigned();
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
