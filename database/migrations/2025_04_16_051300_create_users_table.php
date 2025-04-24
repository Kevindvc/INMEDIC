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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('password',255)->nullable();
            $table->string('telefono',20)->default(0);
            $table->boolean('estado')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->boolean('vales')->default(0);
            $table->string('alergia', 255);
            $table->text('patologias')->nullable();
            $table->enum('plan', ['gratutio', 'basico', 'premiun'])->default('gratutio');
            $table->enum('genero', ['Masculino', 'Femenino', 'Otro'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
