<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula_cliente')->nullable();
            $table->string('nombre_cliente')->nullable();
            $table->integer('telefono')->nullable();
            $table->timestamp('fecha_facturacion');
            $table->integer('iva');
            $table->integer('total_iva');
            $table->integer('precio_producto');
            $table->integer('total_venta');
            $table->string('descripcion_venta');
            $table->bigInteger('id_empresa')->unsigned();
            $table->foreign('id_empresa')->references('id')->on('empresas');
            $table->bigInteger('id_municipio')->unsigned();
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->bigInteger('id_departamento')->unsigned();
            $table->foreign('id_departamento')->references('id')->on('departamentos');
            $table->bigInteger('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->bigInteger('id_venta')->unsigned();
            $table->foreign('id_venta')->references('id')->on('ventas');
            $table->bigInteger('id_sucursal')->unsigned();
            $table->foreign('id_sucursal')->references('id')->on('sucursales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
