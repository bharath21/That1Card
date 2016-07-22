<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retailers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('retailer_code');
            $table->string('retailer_name');
            $table->string('retailer_TINno');
            $table->string('retailer_CSTno');
            $table->string('retailer_email');
            $table->string('retailer_phone');
            $table->string('retailer_address');
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
        Schema::drop('retailers');
    }
}
