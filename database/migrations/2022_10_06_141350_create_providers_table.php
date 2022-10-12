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
        Schema::create('providers', function (Blueprint $table) {
            $table-> charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->timestamps();
            $table->string('name', 50)-> required();
            $table->string('business_name', 100);
            $table->string('address', 100);
            $table->string('email', 100);
            $table->string('website', 100);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }
};
