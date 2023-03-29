<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalifacionesClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones_clientes', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('clienteId')->nullable();
            $table->smallInteger('tipoClienteId')->nullable();
            $table->string('califacion')->nullable();
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
        Schema::dropIfExists('califaciones_cliente');
    }
}
