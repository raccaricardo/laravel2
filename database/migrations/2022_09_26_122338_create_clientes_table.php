<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table-> charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('nombre');
            $table->string('apellido', 150);
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('email_secundario')-> nullable();
            $table->string('dni', 255)-> nullable()->default(null);
            $table->string('razon_social')-> nullable()->default(null);
            $table->string('razon_social_direccion')-> nullable()->default(null);
            $table->string('razon_social_cuit')-> nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });

    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
