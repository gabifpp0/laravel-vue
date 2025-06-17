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
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->year('ano');
            $table->string('semestre');
            $table->foreignId('curso_id')->constrained('cursos');
            $table->enum('turno', ['manhã', 'tarde', 'noite', 'integral'])->default('integral');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
