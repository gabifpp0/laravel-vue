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
        Schema::create('servidors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->foreignId('funcao_id')->constrained('funcaos');
            $table->foreignId('materia_id')->constrained('materias');
            $table->foreignId('diretoria_id')->constrained('diretorias');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servidors');
    }
};
