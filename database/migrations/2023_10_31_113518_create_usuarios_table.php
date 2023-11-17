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
            $table->string('Matricula', 255);
            $table->primary('Matricula');
            $table->string('usuario', 255)->nullable(true);
            $table->string('nome', 255)->nullable(true);
            $table->string('turma',255)->nullable(false);
            $table->string('senha', 255)->nullable(true);
            $table->string('email', 255)->nullable(true);
            $table->string('cargo', 255)->nullable(true);
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
