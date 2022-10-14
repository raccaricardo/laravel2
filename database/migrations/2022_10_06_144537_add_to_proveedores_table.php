<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('proveedores', function (Blueprint $table) {

            $table->after('id', function ($table) {
                $table->foreignId('localidad')
                    ->constrained('localidades')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            });
            $table->after('id', function ($table) {
                $table->foreignId('condicion_fiscal')
                    ->constrained('iva')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            });
        });
    }

    public function down()
    {
        Schema::table('proveedores', function (Blueprint $table) {

            $table->dropForeign('proveedores_localidad_foreign');
            $table->dropColumn('localidad');

            $table->dropForeign('proveedores_condicion_fiscal_foreign');
            $table->dropColumn('condicion_fiscal');
        });
    }
};
