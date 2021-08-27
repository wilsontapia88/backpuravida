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
            $table->id();
            $table->unsignedInteger('brand_id');
            $table->string('brand_title')->default(null);
            $table->string('brand_name')->default(null);
            $table->timestamp('brand_created')->nullable()->default(null);
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
        Schema::dropIfExists('ws_products_brands');
    }
}
