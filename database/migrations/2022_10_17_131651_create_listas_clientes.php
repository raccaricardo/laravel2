<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('listas_clientes', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente');
            $table->unsignedBigInteger('lista');
            $table->primary(['lista', 'cliente']);
        });
        Schema::table('listas_clientes', function (Blueprint $table) {
            $table->foreign('cliente')->references('id')->on('clientes')->onUpdate('cascade')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('lista')->references('id')->on('listas_precios')->onUpdate('cascade')->onUpdate('restrict');
        });
    }


    public function down()
    {
        Schema::dropIfExists('listas_clientes');
    }
};
