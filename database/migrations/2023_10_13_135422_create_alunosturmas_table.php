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
        Schema::create('alunosturmas', function (Blueprint $table) {
            $table->id('IDalunosturmas');
            $table->string('atserieturma', 20)->nullable(false);
            $table->foreign('atserieturma')->references('serieturma')->on('turmas');
            $table->string('atmatriculaaluno', 255)->nullable(false);
            $table->foreign('atmatriculaaluno')->references('MatriculaAluno')->on('alunos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunosturmas');
    }
};
