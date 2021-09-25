<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //add Orders
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('cart_id');
            $table->integer('customer_id');
            $table->string('payment_type_id');
            $table->string('shipping_type_id');
            $table->integer('city');
            $table->string('address');
            $table->decimal('total', 4);
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
        //
        Schema::drop('orders');
    }
}
