<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('listas_productos', function (Blueprint $table) {
            $table->bigInteger('lista');
            $table->bigInteger('producto');
            $table->primary('lista','producto');

            $table->decimal('porcentaje', 10, 2);


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('listas_productos');
    }
};
