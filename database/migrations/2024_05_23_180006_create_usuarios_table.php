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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('estadoCivil');
            $table->string('ocupacion');
            $table->string('religion');
            $table->string('lugarNacimiento');
            $table->string('lugarResidencia');
            $table->string('escolaridad');
            $table->string('nombreEscuela');
            $table->string('cubreColegiatura');
            $table->boolean('librosApoyo');
            $table->boolean('computadoraApoyo');
            $table->string('telefono');
            $table->boolean('pruebaEmbarazo');
            $table->boolean('apoyoMedico');
            $table->string('requiereValoracion');
            $table->string('discapacidad');
            $table->foreignId('denuncia_id')->constrained('denuncias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
