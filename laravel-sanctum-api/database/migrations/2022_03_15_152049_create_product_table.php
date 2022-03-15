<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('cartQty');
            $table->string('options');
            $table->string('product_category');
            $table->string('barcode');
            $table->float('weight');
            $table->string('image');
            $table->float('discount');
            $table->boolean('stock_availability');
            $table->integer('quantity');
            $table->string('track_inventory');
            $table->float('product_tax');
            $table->string('is_taxable_goods_applied');
            $table->float('special_price');
            $table->float('price');
            $table->boolean('is_enabled');
            $table->string('sku');
            $table->string('product_description');
            $table->string('product_name');
            $table->string('context');
            $table->id('product_id');
            $table->integer('cartProductSubtotal');
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
        Schema::dropIfExists('product');
    }
}
