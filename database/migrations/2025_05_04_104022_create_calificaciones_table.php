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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id('ID_Calificacion');
            $table->foreignId('ID_Estudiante')->references('ID_Estudiante')->on('estudiantes')->onDelete('cascade');
            $table->foreignId('ID_Curso')->references('ID_Curso')->on('cursos')->onDelete('cascade');

            $table->unsignedTinyInteger('Nota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones');
    }
};
