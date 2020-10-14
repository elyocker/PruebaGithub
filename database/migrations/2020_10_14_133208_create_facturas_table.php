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
            $table->bigInteger('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuarios');
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
