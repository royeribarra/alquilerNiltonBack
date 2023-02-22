<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->string('nombreEmpresa')->nullable();
            $table->decimal('credito', 10, 2)->nullable();
            $table->smallInteger('grupoClienteId')->nullable();
            $table->smallInteger('profesionId')->nullable();
            $table->string('documentoIdentidad')->unique();
            $table->string('tipoDocumentoId')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
