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
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCompleto');
            $table->string('curp');
            $table->integer('edad');
            $table->string('estadoCivil');
            $table->string('religion');
            $table->boolean('primeraOpcion');
            $table->boolean('atencionPrevia');
            $table->foreignId('direccion_id')->constrained('direccions')->onDelete('cascade');
            $table->foreignId('contacto_id')->constrained('contactos')->onDelete('cascade');
            $table->foreignId('casa_id')->constrained('casas')->onDelete('cascade');
            $table->foreignId('ingreso_id')->constrained('ingresos')->onDelete('cascade');
            $table->foreignId('hijo_id')->constrained('hijos')->onDelete('cascade');
            $table->foreignId('habitante_id')->constrained('habitantes')->onDelete('cascade');
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
