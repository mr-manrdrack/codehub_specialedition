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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('professorHora', 255);
            
            $table->string('dia');
            
            $table->string('priturmaAula', 255)->nullable(true);
            $table->string('primeiraAula', 255)->nullable(true);

            $table->string('segturmaAula', 255)->nullable(true);
            $table->string('segundaAula', 255)->nullable(true);
            
            $table->string('terturmaAula', 255)->nullable(true);
            $table->string('terceiraAula', 255)->nullable(true);
            
            $table->string('quaturmaAula', 255)->nullable(true);
            $table->string('quartaAula', 255)->nullable(true);
            
            $table->string('quiturmaAula', 255)->nullable(true);
            $table->string('quintaAula', 255)->nullable(true);
            
            $table->string('sexturmaAula', 255)->nullable(true);
            $table->string('sextaAula', 255)->nullable(true);
            
            $table->string('setturmaAula', 255)->nullable(true);
            $table->string('setimaAula', 255)->nullable(true);
            
            $table->string('oitturmaAula', 255)->nullable(true);
            $table->string('oitavaAula', 255)->nullable(true);
            
            $table->string('nonturmaAula', 255)->nullable(true);
            $table->string('nonaAula', 255)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
