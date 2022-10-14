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
            $table->string('nombre', 255);
            $table->string('apellido', 150);
            $table->string('direccion', 255);
            $table->string('telefono', 255);
            $table->string('email', 255);
            $table->string('email_secundario', 255)-> nullable();
            $table->string('dni', 255)-> nullable();
            $table->string('razon_social', 255)-> nullable();
            $table->string('razon_social_direccion', 255)-> nullable();
            $table->string('razon_social_localidad', 255)-> nullable();
            $table->string('razon_social_cuit', 255)-> nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('table_clientes');
    }
};
