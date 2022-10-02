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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
            $table->foreignId('suppleir_id')->constrained('suppleirs')->onUpdate('cascade')->nullable(); 
            $table->foreignId('category_id')->constrained('categories')->onUpdate('cascade')->nullable();
            $table->string('quantityPerUnit', 20);
            $table->decimal('unitPrice');
            $table->smallInteger('unitsInStock')->nullable();
            $table->smallInteger('unitsOnOrder')->nullable();
            $table->smallInteger('reorderLevel')->nullable();
            $table->integer('discontinued')->nullable();

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
        Schema::dropIfExists('products');
    }
};
