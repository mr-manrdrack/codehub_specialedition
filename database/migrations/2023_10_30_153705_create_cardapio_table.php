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
        Schema::create('cardapios', function (Blueprint $table) {
            $table->id();

            //$table->string('dia');
            
            $table->string('SegundaBebidaManha', 255)->nullable(true);
            $table->string('SegundaComidaManha', 255)->nullable(true);
            $table->string('SegundaBebidaAlmoço', 255)->nullable(true);
            $table->string('SegundaComidaAlmoço', 255)->nullable(true);
            $table->string('SegundaBebidaTarde', 255)->nullable(true);
            $table->string('SegundaComidaTarde', 255)->nullable(true);

            $table->string('TerçaBebidaManha', 255)->nullable(true);
            $table->string('TerçaComidaManha', 255)->nullable(true);
            $table->string('TerçaBebidaAlmoço', 255)->nullable(true);
            $table->string('TerçaComidaAlmoço', 255)->nullable(true);
            $table->string('TerçaBebidaTarde', 255)->nullable(true);
            $table->string('TerçaComidaTarde', 255)->nullable(true);

            $table->string('QuartaBebidaManha', 255)->nullable(true);
            $table->string('QuartaComidaManha', 255)->nullable(true);
            $table->string('QuartaBebidaAlmoço', 255)->nullable(true);
            $table->string('QuartaComidaAlmoço', 255)->nullable(true);
            $table->string('QuartaBebidaTarde', 255)->nullable(true);
            $table->string('QuartaComidaTarde', 255)->nullable(true);

            $table->string('QuintaBebidaManha', 255)->nullable(true);
            $table->string('QuintaComidaManha', 255)->nullable(true);
            $table->string('QuintaBebidaAlmoço', 255)->nullable(true);
            $table->string('QuintaComidaAlmoço', 255)->nullable(true);
            $table->string('QuintaBebidaTarde', 255)->nullable(true);
            $table->string('QuintaComidaTarde', 255)->nullable(true);

            $table->string('SextaBebidaManha', 255)->nullable(true);
            $table->string('SextaComidaManha', 255)->nullable(true);
            $table->string('SextaBebidaAlmoço', 255)->nullable(true);
            $table->string('SextaComidaAlmoço', 255)->nullable(true);
            $table->string('SextaBebidaTarde', 255)->nullable(true);
            $table->string('SextaComidaTarde', 255)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cardapios');
    }
};
