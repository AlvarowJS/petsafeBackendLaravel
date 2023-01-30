<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascota_perdidas', function (Blueprint $table) {
            $table->id();            
            $table->string('nombre');
            $table->integer('edad');            
            $table->string('raza');
            $table->string('color');
            $table->string('statura');
            $table->integer('dias_extraviado');
            $table->text('lugar');
            $table->string('genero');
            $table->string('descripcion');
            $table->string('nombre_dueno');
            $table->string('numero_dueno');
            $table->string('tipo_mascota');
            $table->string('foto');
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
        Schema::dropIfExists('mascota_perdidas');
    }
};
