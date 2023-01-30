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
        Schema::create('avistamientos', function (Blueprint $table) {
            $table->id();
            $table->string('lugar_avistamiento');
            $table->string('informacion_extra')->nullable();
            $table->date('fecha_avistamiento');
            $table->string('nombre_colaborador')->nullable();
            $table->string('cel_colaborador',9)->nullable();
            $table->foreignId('mascota_perdida_id')->nullable()->constrained('mascota_perdidas');
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
        Schema::dropIfExists('avistamientos');
    }
};
