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
            $table->id();
            $table->unsignedInteger('cat_id');
            $table->unsignedInteger('cat_parent')->default(null);
            $table->string('cat_title')->default(null);
            $table->string('cat_name')->default(null);
            $table->string('cat_sizes')->default(null);
            $table->timestamp('cat_created')->nullable()->default(null);
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
        Schema::dropIfExists('ws_products_categories');
    }
}
