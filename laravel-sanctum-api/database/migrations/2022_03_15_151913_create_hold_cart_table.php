<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoldCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hold_cart', function (Blueprint $table) {
            $table->id('cart_id');
            $table->time('time');
            $table->date('date');
            $table->text('cart_data');
            $table->integer('qty');
            $table->boolean('is_synchronized');

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
        Schema::dropIfExists('hold_cart');
    }
}
