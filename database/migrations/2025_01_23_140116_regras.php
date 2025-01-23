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
        Schema::create('regras', function (Blueprint $table) {
            $table->id();
            $table->String('nome');
            $table->timestamps();
        });

        # Tabela de relacionamento de Regras e Usuario:
        Schema::create('regra_user', function (Blueprint $table){
            $table->id();
            
            # Chave estrageira de usuario:
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            # Chave estrtageira de regras:
            $table->unsignedBigInteger('id_regra');
            $table->foreign('id_regra')->references('id')->on('regras');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regras');
    }
};
