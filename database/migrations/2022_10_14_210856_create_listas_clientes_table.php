<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('listas_clientes', function (Blueprint $table) {
            $table->bigInteger('lista');
            $table->bigInteger('cliente');
            $table->primary('lista', 'cliente');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('listas_clientes');
    }
};
