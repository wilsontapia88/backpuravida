<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsProductsStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_products_stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('stock_id');
            $table->unsignedInteger('pdt_id');
            $table->string('stock_code')->default('');
            $table->decimal('stock_inventory', 10,0)->default(0);
            $table->decimal('stock_sold', 10,0)->default(0);
            // $table->foreign('pdt_id')->references('ptd_id')->on('ws_products')->onDelete('cascade');
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
        Schema::dropIfExists('ws_products_stocks');
    }
}
