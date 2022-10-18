<?php

use App\Models\Lista_precio;
use App\Models\Producto;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('listas_productos', function (Blueprint $table) {
            $table->unsignedBigInteger('lista');
            $table->unsignedBigInteger('producto');
            $table->decimal('porcentaje', 10, 2);
            $table->timestamps();

            $table->primary(['lista', 'producto']);

        });
        Schema::table('listas_productos', function ($table) {
            $table->foreign('lista')->references('id')->on('listas_precios')-> onUpdate('cascade')->onDelete('restrict');
            $table->foreign('producto')->references('id')->on('productos')-> onUpdate('cascade')->onDelete('restrict');
        });

    }

    public function down()
    {
        Schema::dropIfExists('listas_productos');
    }
};
