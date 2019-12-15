<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('order_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('order_id');
            $table->Integer('item_id');
            $table->Integer('amount');
            $table->Integer('prices');
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
        Schema::dropIfExists('order_detail');
    }
}
