<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubOrderInshop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sub_order_inshop', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('order_inshop_id');
            $table->Integer('item_id');
            $table->Integer('amount');
            $table->Integer('amount_prices');
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
        Schema::dropIfExists('sub_order_inshop');
    }
}
