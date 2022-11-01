<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('subcategorias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria')->constrained('categorias')->onDelete('restrict');
            $table->string('nombre', 100)->unique();
            $table->mediumText('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('subcategorias');
    }
};
