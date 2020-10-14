<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas_productos', function (Blueprint $table) {
            $table->bigInteger('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->bigInteger('id_factura')->unsigned();
            $table->foreign('id_factura')->references('id')->on('facturas');
            $table->string('nombre_producto')->nullable();
            $table->integer('cantidad_productos')->nullable();
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
        Schema::dropIfExists('facturas_productos');
    }
}
