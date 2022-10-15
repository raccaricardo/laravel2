<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('listas_clientes', function (Blueprint $table) {
            $table->bigInteger('lista', function ($table) {
                $table->foreignId('lista')
                    ->constrained('listas_precios')
                    ->onUpdate('cascade')
                    ->onDelete('cascade')
                    ->change();
            });
            $table->bigInteger('cliente', function ($table) {
                $table->foreignId('cliente')
                    ->constrained('clientes')
                    ->onUpdate('cascade')
                    ->onDelete('cascade')
                    ->change();
            });
        });
    }

    public function down()
    {
        Schema::table('listas_clientes', function (Blueprint $table) {
            $table->dropForeign('listas_clientes_lista_foreign');
            $table->dropColumn('lista');
            $table->dropForeign('listas_clientes_cliente_foreign');
            $table->dropColumn('cliente');
        });
    }
};
