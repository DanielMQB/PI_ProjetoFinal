<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atrativos', function (Blueprint $table){
            $table->foreignId('unidade_id')->constrained('unidades')->cascadeOnUpdate()->cascadeOnDelete();

        });

        Schema::table('ingressos', function (Blueprint $table){
            $table->foreignId('unidade_id')->constrained('unidades')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
        });

        Schema::create('unidades_dias', function (Blueprint $table){
            $table->id();
            $table->foreignId('unidade_id')->constrained('unidades')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('dia_id')->constrained('dias')->cascadeOnUpdate()->cascadeOnDelete();
        });

        Schema::create('atrativos_ingressos', function (Blueprint $table){
            $table->id();
            $table->foreignId('atrativo_id')->constrained('atrativos')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreignId('ingresso_id')->constrained('ingressos')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atrativos',function (Blueprint $table){
            $table->dropForeign('unidade_id')
            ->constrained('unidades')
            ->ondelete('cascade');
        });

        Schema::table('ingressos',function (Blueprint $table){
            $table->dropForeign('unidade_id')->constrained('unidades')->ondelete('cascade');
            $table->dropForeign('user_id')->constrained('users')->ondelete('cascade');
        });

        Schema::dropIfExists('unidades_dias');
        Schema::dropIfExists('atrativos_ingressos');
    }
};
