<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('informacion', function (Blueprint $table) {
        $table->id();
        $table->string('Nombre_Mascota');
        $table->tinyInteger('Edad');
        $table->string('Raza');
        $table->tinyInteger('Peso');

        $table->unsignedBigInteger('id_informacion');
        $table->foreign('id_informacion')->references('id')->on('informacion_actividad');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacion');
    }
};