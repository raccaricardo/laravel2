<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('providers', function (Blueprint $table) {


            $table->after('id', function($table){
                $table->foreignId('city_id')
                ->constrained('cities')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                $table->foreignId('fiscal_condition_id')
                ->constrained('iva')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            });
        });
    }

    
    public function down()
    {
        Schema::table('providers', function (Blueprint $table) {
            $table->dropForeign('providers_city_id_foreign');
            $table->dropColumn('city_id');
            $table->dropForeign('providers_fical_condition_id_foreign');
            $table->dropColumn('fiscal_condition_id');
        });
    }
};
