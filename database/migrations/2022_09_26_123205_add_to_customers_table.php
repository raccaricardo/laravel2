<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
            $table->after('id', function($table){
                $table->foreignId('city_id')
                ->constrained('cities')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            });
            $table->after('id', function($table){
                $table->foreignId('state_id')
                ->constrained('states')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
            $table->dropForeign('customers_city_id_foreign');
            $table->dropColumn('city_id');
        });
        Schema::table('customers', function (Blueprint $table) {
            //
            $table->dropForeign('customers_state_id_foreign');
            $table->dropColumn('state_id');
        });
    }
};
