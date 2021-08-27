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
            $table->id();
            $table->unsignedInteger('cp_id');
            $table->string('cp_title')->default(null);
            $table->string('cp_coupon')->default(null);
            $table->decimal('cp_discount', 11,0)->default(null);
            $table->timestamp('cp_start')->nullable()->default(null);
            $table->timestamp('cp_end')->nullable()->default(null);
            $table->decimal('cp_hits', 11, 0)->default(null);
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
        Schema::dropIfExists('ws_products_coupons');
    }
}
