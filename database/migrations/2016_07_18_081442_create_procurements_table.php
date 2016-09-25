<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date_of_purchase');
            $table->string('manufacturer_code');
            $table->string('SKU_code');
            $table->string('quantity');
            $table->string('price_overall');
            $table->string('supplier_card_code');
            $table->string('supplier_card_name');
            $table->string('card_url');
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
        Schema::drop('procurements');
    }
}
