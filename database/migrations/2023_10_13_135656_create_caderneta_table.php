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
        Schema::create('cadernetas', function (Blueprint $table) {
            $table->string('MatriculaAluno', 255);
            $table->primary('MatriculaAluno');
            $table->foreign('MatriculaAluno')->references('atmatriculaaluno')->on('alunosturmas');
            $table->decimal('nota1', 3, 1);
            $table->decimal('nota2', 3, 1);
            $table->decimal('nota3', 3, 1);
            $table->decimal('nota4', 3, 1);
            $table->decimal('nota5', 3, 1);
            $table->decimal('prova', 3, 1);
            $table->decimal('média', 3, 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadernetas');
    }
};
