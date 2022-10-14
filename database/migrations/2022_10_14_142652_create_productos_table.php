<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('nombre_alternativo')->nullable()->default(null);
            $table->mediumText('descripcion')->nullable();
            $table->decimal('costo', 14, 2);
            $table->decimal('iva', 10, 2);
            $table->integer('stock')->unsigned()->default(0);
            $table->integer('stock_minimo')->unsigned();
            $table->integer('stock_maximo')->unsigned();
            $table->integer('garantia')->unsigned();
            $table->string('codigo_upc');
            $table->string('imagen')->nullable();
            $table->boolean('oferta')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
