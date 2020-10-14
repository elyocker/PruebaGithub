<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_productos', function (Blueprint $table) {
            $table->bigInteger('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->bigInteger('id_factura')->unsigned();
            $table->foreign('id_factura')->references('id')->on('facturas');
            $table->string('nombre_producto');
            $table->string('nombre_cliente')->nullable();
            $table->integer('telefono')->nullable();
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
        Schema::dropIfExists('factura_productos');
    }
}
