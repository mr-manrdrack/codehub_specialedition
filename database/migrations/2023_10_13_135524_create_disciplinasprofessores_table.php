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
        Schema::create('disciplinasprofessores', function (Blueprint $table) {
            $table->id('IDdisciplinasprofessores');
            $table->string('dpMatriculaProfessorDisciplina', 255)->nullable(false);
            $table->foreign('dpMatriculaProfessorDisciplina')->references('matriculaprofessor')->on('professores');
            $table->string('dpNomeDisciplina', 255)->nullable(false);
            $table->foreign('dpNomeDisciplina')->references('nomesdisciplina')->on('disciplinas');
            $table->string('dpSerieTurma', 20)->nullable(false);
            $table->foreign('dpSerieTurma')->references('serieturma')->on('turmas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplinasprofessores');
    }
};
