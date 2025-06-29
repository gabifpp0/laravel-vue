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
        Schema::create('professor_materia', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('servidor_id')->constrained('servidores');
            $table->foreignId('materia_id')->constrained('materias');
            $table->string('periodo')->nullable();

            $table->unique(['materia_d', 'servidor_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professor_materia');
    }
};
