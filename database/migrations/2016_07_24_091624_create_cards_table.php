<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_SKU_code');
            $table->string('card_wholesale_price');
            $table->string('card_retail_price');
            $table->string('card_status');
            $table->string('card_disable');
            $table->string('card_in_stock');
            $table->string('card_blocked');
            $table->string('card_MOQ'); //minimum order quantity
            $table->string('card_base_price');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cards');
    }
}
