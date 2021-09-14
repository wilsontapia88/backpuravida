<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsOrdersItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_orders_items', function (Blueprint $table) {
            $table->unsignedInteger('order_id')->index('wc_order');
            $table->integer('pdt_id')->nullable();
            $table->integer('stock_id')->nullable();
            $table->unsignedInteger('item_id')->primary();
            $table->string('item_name')->nullable();
            $table->decimal('item_price', 11)->nullable();
            $table->decimal('item_amount', 11, 0)->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_orders_items');
    }
}
