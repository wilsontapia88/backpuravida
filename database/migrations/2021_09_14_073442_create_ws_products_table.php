<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_products', function (Blueprint $table) {
            $table->unsignedInteger('pdt_id')->primary();
            $table->string('pdt_code')->default('');
            $table->unsignedInteger('pdt_parent')->nullable()->index('wc_product_parent');
            $table->string('pdt_title')->nullable();
            $table->string('pdt_subtitle')->nullable();
            $table->string('pdt_name')->nullable();
            $table->string('pdt_hotlink')->nullable();
            $table->string('pdt_cover')->nullable();
            $table->text('pdt_content')->nullable();
            $table->decimal('pdt_price', 11)->nullable();
            $table->decimal('pdt_inventory', 10, 0)->default(0);
            $table->decimal('pdt_delivered', 10, 0)->default(0);
            $table->unsignedInteger('pdt_brand')->nullable()->index('wc_products_brands');
            $table->unsignedInteger('pdt_category')->nullable()->index('wc_products_categories');
            $table->unsignedInteger('pdt_subcategory')->nullable()->index('wc_products_subcategory');
            $table->decimal('pdt_offer_price', 11)->nullable();
            $table->timestamp('pdt_offer_start')->nullable();
            $table->timestamp('pdt_offer_end')->nullable();
            $table->decimal('pdt_dimension_heigth', 11, 0)->default(0);
            $table->decimal('pdt_dimension_width', 11, 0)->default(0);
            $table->decimal('pdt_dimension_depth', 11, 0)->default(0);
            $table->decimal('pdt_dimension_weight', 11, 0)->default(0);
            $table->timestamp('pdt_created')->nullable();
            $table->decimal('pdt_views', 10, 0)->nullable()->default(0);
            $table->timestamp('pdt_lastview')->nullable();
            $table->integer('pdt_status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_products');
    }
}
