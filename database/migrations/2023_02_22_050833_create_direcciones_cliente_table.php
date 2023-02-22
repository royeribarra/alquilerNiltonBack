<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones_cliente', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('clienteId')->nullable();
            $table->string('pais')->nullable();
            $table->string('departamento')->nullable();
            $table->string('provincia')->nullable();
            $table->string('distrito')->nullable();
            $table->string('tipoDireccion')->nullable();
            $table->string('codigoPostal')->nullable();
            $table->string('direccion1')->nullable();
            $table->string('direccion2')->nullable();
            $table->smallInteger('created_user')->nullable();
            $table->smallInteger('updated_user')->nullable();
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
        Schema::dropIfExists('direcciones_cliente');
    }
}
