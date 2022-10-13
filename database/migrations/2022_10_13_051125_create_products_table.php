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
            $table->string('product_title');
            $table->string('product_description');
            $table->string('key_feature');
            $table->string('color');
            $table->string('size');
            $table->string('status');
            $table->string('category');
            $table->string('start_price');
            $table->string('end_price');
            $table->string('start_quaantity_range');
            $table->string('end_quaantity_range');
            $table->string('barcode');
            $table->string('start_shipping_time');
            $table->string('end_shipping_time');
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
