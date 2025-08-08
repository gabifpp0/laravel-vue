<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->float('preco');
            $table->boolean('disponível')->default(true);
            $table->$_FILES()
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropSoftDeletes();
    }
};
