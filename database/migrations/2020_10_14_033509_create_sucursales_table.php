<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->id();
            $table->integer('nit');
            $table->string('nombre_sucursal');
            $table->string('direccion');
            $table->string('barrio');
            $table->integer('telefono');
            $table->foreign('id_empresas')->references('id')->on('empresas');
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->foreign('id_departamento')->references('id')->on('´departamentos');
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
        Schema::dropIfExists('sucursales');
    }
}
