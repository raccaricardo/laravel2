<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('listas_precios', function (Blueprint $table) {

            $table->id();
            $table->string('nombre', 100)->unique();
            $table->decimal('porcentaje', 10, 2);
            $table->boolean('obligatoria');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('listas_precios');
    }
};
