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
            $table-> string('email', 30)-> unique()-> change();
            $table-> string('name', 50) -> change();
            $table-> string('name', 50) -> unique()-> change();
            $table-> after('id', function ($table) {
                $table-> foreignId('city_id')
                ->constrained('cities')
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
            $table->dropForeign('customers_city_id_foreign');
            $table->dropColumn('city_id');
        });
    }
};
