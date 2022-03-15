<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderEntityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_entity', function (Blueprint $table) {
            $table->id('orderId');
            $table->time('time');
            $table->date('date');
            $table->text('cart_data');
            $table->integer( 'qty');
            $table->text('cash_data');
            $table->boolean('is_synchronized');
            $table->boolean('is_return');
            $table->text('refunded_order_id');
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
        Schema::dropIfExists('order_entity');
    }
}
