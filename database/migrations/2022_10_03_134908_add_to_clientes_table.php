<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {

            $table-> after('id', function ($table) {
                $table-> foreignId('localidad')
                ->constrained('localidades')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            });

        });
    }

    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign('clientes_localidad_foreign');
            $table->dropColumn('localidad');
        });
    }
};
