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
            
            $table->string('SegundaBebidaManha', 255)->nullable(false);
            $table->string('SegundaComidaManha', 255)->nullable(false);
            $table->string('SegundaBebidaAlmoço', 255)->nullable(false);
            $table->string('SegundaComidaAlmoço', 255)->nullable(false);
            $table->string('SegundaBebidaTarde', 255)->nullable(false);
            $table->string('SegundaComidaTarde', 255)->nullable(false);

            $table->string('TerçaBebidaManha', 255)->nullable(false);
            $table->string('TerçaComidaManha', 255)->nullable(false);
            $table->string('TerçaBebidaAlmoço', 255)->nullable(false);
            $table->string('TerçaComidaAlmoço', 255)->nullable(false);
            $table->string('TerçaBebidaTarde', 255)->nullable(false);
            $table->string('TerçaComidaTarde', 255)->nullable(false);

            $table->string('QuartaBebidaManha', 255)->nullable(false);
            $table->string('QuartaComidaManha', 255)->nullable(false);
            $table->string('QuartaBebidaAlmoço', 255)->nullable(false);
            $table->string('QuartaComidaAlmoço', 255)->nullable(false);
            $table->string('QuartaBebidaTarde', 255)->nullable(false);
            $table->string('QuartaComidaTarde', 255)->nullable(false);

            $table->string('QuintaBebidaManha', 255)->nullable(false);
            $table->string('QuintaComidaManha', 255)->nullable(false);
            $table->string('QuintaBebidaAlmoço', 255)->nullable(false);
            $table->string('QuintaComidaAlmoço', 255)->nullable(false);
            $table->string('QuintaBebidaTarde', 255)->nullable(false);
            $table->string('QuintaComidaTarde', 255)->nullable(false);

            $table->string('SextaBebidaManha', 255)->nullable(false);
            $table->string('SextaComidaManha', 255)->nullable(false);
            $table->string('SextaBebidaAlmoço', 255)->nullable(false);
            $table->string('SextaComidaAlmoço', 255)->nullable(false);
            $table->string('SextaBebidaTarde', 255)->nullable(false);
            $table->string('SextaComidaTarde', 255)->nullable(false);
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
