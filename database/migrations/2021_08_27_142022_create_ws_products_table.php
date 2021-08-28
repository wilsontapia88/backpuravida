<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

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
            $table->id();
            $table->unsignedInteger('pdt_id');
            $table->string('pdt_code')->default('');
            $table->unsignedInteger('pdt_parent')->nullable()->default(null);
            $table->string('pdt_title')->nullable()->default(null);
            $table->string('pdt_subtitle')->nullable()->default(null);
            $table->string('pdt_name')->nullable()->default(null);
            $table->string('pdt_hotlink')->nullable()->default(null);
            $table->string('pdt_cover')->nullable()->default(null);
            $table->text('pdt_content')->nullable()->default(null);
            $table->decimal('pdt_price', 11, 2)->nullable()->default(null);
            $table->decimal('pdt_inventory', 10, 0)->default(0);
            $table->decimal('pdt_delivered', 10, 0)->default(0);
            $table->unsignedBigInteger('pdt_brand')->default(null);
            $table->unsignedInteger('pdt_category')->nullable()->default(null);
            $table->unsignedInteger('pdt_subcategory')->nullable()->default(null);
            $table->decimal('pdt_offer_price', 11, 2)->nullable()->default(null);
            $table->timestamp('pdt_offer_start')->nullable()->default(null);
            $table->timestamp('pdt_offer_end')->nullable()->default(null);
            $table->decimal('pdt_dimension_heigth', 11, 0)->default(0);
            $table->decimal('pdt_dimension_width', 10, 0)->default(0);
            $table->decimal('pdt_dimension_depth', 11, 0)->default(0);
            $table->decimal('pdt_dimension_weight', 11,0)->default(0);
            $table->timestamp('pdt_created')->nullable()->default(null);
            $table->decimal('pdt_views' ,10, 0)->nullable()->default(0);
            $table->timestamp('pdt_lastview')->nullable()->default(null);
            $table->integer('pdt_status')->default(0);
            // $table->foreign('pdt_parent')->references('ptd_id')->on('ws_products')->onDelete('set null');
            // $table->foreign('pdt_brand')->references('id')->on('ws_products_brands')->onDelete('set null');
            // $table->foreign('pdt_category')->references('cat_id')->on('ws_products_categories')->onDelete('set null');
            // $table->foreign('pdt_subcategory')->references('cat_id')->on('ws_products_categories')->onDelete('set null');
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
        Schema::dropIfExists('ws_products');
    }
}
