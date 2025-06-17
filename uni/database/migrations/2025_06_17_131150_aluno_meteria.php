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
        Schema::create('aluno_materia', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('aluno_id')->constrained('alunos');
            $table->foreignId('materia_id')->constrained('materias');
            $table->enum('status', ['matriculado', 'cancelada']);

            $table->unique(['materia_d', 'aluno_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno_materia');
    }
};
