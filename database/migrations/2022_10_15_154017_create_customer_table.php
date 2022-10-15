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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('companyName', 40);
            $table->string('contactName', 30);
            $table->string('contactTitle', 50);
            $table->string('address', 60)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('region', 15)->nullable();
            $table->string('postalCode', 25)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('phone', 25)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
};
