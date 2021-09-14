<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsProductsCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_products_coupons', function (Blueprint $table) {
            $table->unsignedInteger('cp_id')->primary();
            $table->string('cp_title')->nullable();
            $table->string('cp_coupon')->nullable();
            $table->decimal('cp_discount', 11, 0)->nullable();
            $table->timestamp('cp_start')->nullable();
            $table->timestamp('cp_end')->nullable();
            $table->decimal('cp_hits', 11, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_products_coupons');
    }
}
