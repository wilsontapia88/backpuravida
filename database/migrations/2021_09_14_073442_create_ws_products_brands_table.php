<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsProductsBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_products_brands', function (Blueprint $table) {
            $table->unsignedInteger('brand_id')->primary();
            $table->string('brand_title')->nullable();
            $table->string('brand_name')->nullable();
            $table->timestamp('brand_created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_products_brands');
    }
}
