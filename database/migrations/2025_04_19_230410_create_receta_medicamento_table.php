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
        Schema::create('receta_medicamento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('receta_id')->nullable()->constrained('recetas')->cascadeOnDelete();
            $table->foreignId('medicamento_id')->nullable()->constrained('medicamentos')->nullOnDelete();
            $table->string('dosis', 50)->nullable();
            $table->string('frecuencia', 50)->nullable();
            $table->string('duracion', 50)->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receta_medicamento');
    }
};
