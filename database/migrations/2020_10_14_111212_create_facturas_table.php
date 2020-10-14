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
            $table->integer('cedula_cliente');
            $table->string('nombre_cliente');
            $table->integer('telefono');
            $table->timestamp('fecha_facturacion');
            $table->integer('iva');
            $table->integer('total_iva');
            $table->integer('precio_producto');
            $table->integer('total_venta');
            $table->string('descripcion_venta');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_ventas')->references('id')->on('ventas');
            $table->foreign('id_sucursal')->references('id')->on('sucursales');
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->foreign('id_departamento')->references('id')->on('departamentos');
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
        Schema::dropIfExists('facturas');
    }
}
