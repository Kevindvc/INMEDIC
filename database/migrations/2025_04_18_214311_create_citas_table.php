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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->dateTime('fecha_hora');
            $table->enum('estado', ['Pendiente', 'Confirmada', 'Cancelada', 'Completada'])->default('Pendiente');
            $table->enum('metodo', ['videollamada', 'llamada', 'SMS'])->default('videollamada');
            $table->string('especialidad', 100);
            $table->string('enlace', 255)->nullable();
            $table->string('notas_adicionales', 255)->nullable();
            $table->timestamps();
    
            // Llaves foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('doctor_id')->references('id')->on('doctores')->onDelete('set null');
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
