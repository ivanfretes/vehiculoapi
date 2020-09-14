<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehichuloVersion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo_version', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_version');
            $table->float('precio')->nullable();
            $table->integer('cilindraje')->nullable();
            $table->integer('tipo_combustible')->nullable();
            $table->integer('velocidad_automatica')->nullable();
            $table->enum('bluetooth', ['si', 'no'])
                ->default('no');
            $table->enum('estado', ['activo', 'inactivo'])
                ->default('activo');
            $table->unsignedBigInteger('modelo_id');
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
        Schema::dropIfExists('vehiculo_version');
    }
}
