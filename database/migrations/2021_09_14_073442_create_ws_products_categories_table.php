<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsProductsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_products_categories', function (Blueprint $table) {
            $table->unsignedInteger('cat_id')->primary();
            $table->unsignedInteger('cat_parent')->nullable();
            $table->string('cat_title')->nullable();
            $table->string('cat_name')->nullable();
            $table->string('cat_sizes')->nullable();
            $table->timestamp('cat_created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_products_categories');
    }
}
