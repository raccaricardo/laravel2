<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table-> charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('nombre')-> unique();
            $table->string('razon_social');
            $table->string('cuit')->nullable()->unique();
            $table->string('direccion');
            $table->string('telefono', 100)->nullable()->default(null);    
            $table->string('email');
            $table->string('sitio_web')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
};
