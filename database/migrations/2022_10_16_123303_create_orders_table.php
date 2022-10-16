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
    /*public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('shipper_id')->constrained('shippers');
            $table->date('orderDate');
            $table->date('requiredDate');
            $table->dateTime('shippedDate', 4);
            $table->decimal('Freight', 9, 3);

            $table->timestamps();
        });
    }*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /*public function down()
    {
        Schema::dropIfExists('orders');
    }*/
};
