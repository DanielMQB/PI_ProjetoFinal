<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtrativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atrativos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',60);
            $table->string('descricao',250);
            $table->string('tipo',60);
            $table->string('observacoes',250);
            $table->integer('capacidade');
            $table->time('duracao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atrativos');
    }
};
