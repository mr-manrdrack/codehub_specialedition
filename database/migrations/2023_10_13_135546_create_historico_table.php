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
        Schema::create('historico', function (Blueprint $table) {
            $table->string('MatriculaHistorico', 255);
            $table->primary('MatriculaHistorico');
            $table->foreign('MatriculaHistorico')->references('atmatriculaaluno')->on('alunosturmas');
            $table->integer('MediaFaltas');
            $table->integer('MediaAnual');
            $table->text('Instituições Passadas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historico');
    }
};
