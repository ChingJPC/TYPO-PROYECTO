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
        Schema::create('tipomascota', function (Blueprint $table) {
            $table->id('Id_Tipo_Mascota');
            $table->string('Tipo_Mascota');

            $table->foreignId('id_user');
            $table->foreign('id_user')->references('id')->on('users');     

            $table->foreignId('id_mascota');
            $table->foreign('id_mascota')->references('id')->on('informacion');   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipomascota');
    }
};
