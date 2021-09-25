<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //add Products
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->decimal('price','8');
            $table->string('name'); /*no multilanguage on product*/
            $table->integer('status');
            $table->integer('stock_status_id');
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
        Schema::drop('products');
    }
}
