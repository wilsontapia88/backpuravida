<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsProductsStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_products_stock', function (Blueprint $table) {
            $table->unsignedInteger('stock_id')->primary();
            $table->unsignedInteger('pdt_id')->index('wc_products_stock');
            $table->string('stock_code')->default('');
            $table->decimal('stock_inventory', 10, 0)->default(0);
            $table->decimal('stock_sold', 10, 0)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_products_stock');
    }
}
