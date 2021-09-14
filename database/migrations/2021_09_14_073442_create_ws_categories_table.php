<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_categories', function (Blueprint $table) {
            $table->integer('category_id')->primary();
            $table->integer('category_parent')->nullable();
            $table->string('category_name')->nullable();
            $table->string('category_title')->nullable();
            $table->text('category_content')->nullable();
            $table->timestamp('category_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_categories');
    }
}
