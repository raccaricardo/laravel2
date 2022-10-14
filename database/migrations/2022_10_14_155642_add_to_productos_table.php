<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->after('id', function ($table) {
                    $table->foreignId('fabricante')
                        ->constrained('fabricantes')
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
                });
            $table->after('id', function ($table) {
                $table->foreignId('proveedor')
                ->constrained('proveedores')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            });
                $table->after('id', function ($table) {
                    $table->foreignId('subcategoria')
                        ->constrained('subcategorias')
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
                });
        });
    }

    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign('productos_subcategoria_foreign');
            $table->dropColumn('subcategoria');
            $table->dropForeign('productos_proveedor_foreign');
            $table->dropColumn('proveedor');
            $table->dropForeign('productos_fabricante_foreign');
            $table->dropColumn('fabricante');
        });
    }
};
