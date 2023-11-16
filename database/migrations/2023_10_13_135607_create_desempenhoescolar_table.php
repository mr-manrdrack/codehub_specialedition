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
        Schema::create('desempenhoescolar', function (Blueprint $table) {
            $table->string('ComponentesCurriculares', 255);
            $table->primary('ComponentesCurriculares');
            

            $table->decimal('PUnidadeMedia', 3, 1)->nullable(true);
            $table->integer('PUnidadeFJ')->nullable(true);
            $table->integer('PUnidadeFNJ')->nullable(true);
            $table->decimal('PUnidadePFA', 5, 2)->nullable(true);

            $table->decimal('SUnidadeMedia', 3, 1)->nullable(true);
            $table->integer('SUnidadeFJ')->nullable(true);
            $table->integer('SUnidadeFNJ')->nullable(true);
            $table->decimal('SUnidadePFA', 5, 2)->nullable(true);

            $table->decimal('TUnidadeMedia', 3, 1)->nullable(true);
            $table->integer('TUnidadeFJ')->nullable(true);
            $table->integer('TUnidadeFNJ')->nullable(true);
            $table->decimal('TUnidadePFA', 5, 2)->nullable(true);

            $table->decimal('QUnidadeMedia', 3, 1)->nullable(true);
            $table->integer('QUnidadeFJ')->nullable(true);
            $table->integer('QUnidadeFNJ')->nullable(true);
            $table->decimal('QUnidadePFA', 5, 2)->nullable(true);
            
            $table->decimal('MediaAnual', 3, 1)->nullable(true);
            $table->decimal('NotaRecFinal', 3, 1)->nullable(true);
            $table->decimal('NotaFinal', 3, 1)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desempenhoescolar');
    }
};
