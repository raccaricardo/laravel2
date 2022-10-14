<?php

use Doctrine\DBAL\Event\SchemaDropTableEventArgs;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('listas_productos', function (Blueprint $table) {
            $table->bigInteger('producto', function ($table) {
                $table->foreignId('producto')
                    ->constrained('productos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade')
                    ->change();
            });
        });
        Schema::table('listas_productos', function (Blueprint $table) {
            $table->bigInteger('lista', function ($table) {
                $table->foreignId('lista')
                    ->constrained('listas_precios')
                    ->onUpdate('cascade')
                    ->onDelete('cascade')
                    ->change();
            });
        });
    }


    public function down()
    {
        Schema::table('listas_productos', function (Blueprint $table) {
            $table->dropForeign('listas_productos_producto_foreign');
            $table->dropColumn('producto');

            $table->dropForeign('listas_productos_lista_foreign');
            $table->dropColumn('lista');
        });
    }
};
