<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('tipoProductoId')->nullable();
            $table->smallInteger('almacenId')->nullable();
            $table->smallInteger('modeloTelaId')->nullable();
            $table->smallInteger('telaId')->nullable();
            $table->smallInteger('ocasionId')->nullable();
            $table->smallInteger('modeloPrendaId')->nullable();
            $table->string('marca')->nullable();
            $table->string('color')->nullable();
            $table->string('filosSolapa')->nullable();
            $table->string('colorFilos')->nullable();
            $table->string('botones')->nullable();

            
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
        Schema::dropIfExists('productos');
    }
}
