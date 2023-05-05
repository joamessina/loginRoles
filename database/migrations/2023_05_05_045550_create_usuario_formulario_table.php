<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::connection('formulario_pronos')->create('usuario_formulario', function (Blueprint $table) {
        $table->id('id_pronos');
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
        $table->string('base');
        $table->string('base_calidad');
        $table->string('intermedia');
        $table->string('intermedia_calidad');
        $table->string('cumbre');
        $table->string('cumbre_calidad');
        $table->string('icono10');
        $table->string('icono11');
        $table->string('tminima_hoy');
        $table->string('tmaxima_hoy');
        $table->text('textarea10');
        $table->text('textarea11');
        $table->string('icono12');
        $table->string('icono13');
        $table->string('tminima_sig');
        $table->string('tmaxima_sig');
        $table->text('textarea12');
        $table->text('textarea13');
        $table->string('icono14');
        $table->string('icono15');
        $table->string('tminima_sig3');
        $table->string('tmaxima_sig3');
        $table->text('textarea14');
        $table->text('textarea15');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_formulario');
    }
};
