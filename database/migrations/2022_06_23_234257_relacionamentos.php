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
            $table->foreignId('unidade_id')->constrained('unidades');
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
    }
};
