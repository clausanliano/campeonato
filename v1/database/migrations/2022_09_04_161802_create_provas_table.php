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
        Schema::create('provas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('qtd_atletas');
            $table->text('observacao')->nullable();


            $table->foreignId('campeonato_id')->constrained('campeonatos')->onDelete('cascade');
            /*
            $table->foreignId('aparelho_id')->constrained('aparelhos')->onDelete('cascade');

            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            */
            $table->timestamps();
        });

        /*
        Schema::create('aparelho_prova', function (Blueprint $table) {
            $table->id();
            //Aparelho
            $table->foreignId('aparelho_id')->constrained('aparelhos')->onDelete('cascade');
            //Prova
            $table->foreignId('prova_id')->constrained('provas')->onDelete('cascade');
            $table->timestamps();
        });
        */


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provas');
        //Schema::dropIfExists('aparelho_prova');
    }
};
