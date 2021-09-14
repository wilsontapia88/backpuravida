<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_pages', function (Blueprint $table) {
            $table->unsignedInteger('page_id')->primary();
            $table->string('page_title')->nullable();
            $table->string('page_subtitle')->nullable();
            $table->string('page_name')->nullable();
            $table->text('page_content')->nullable();
            $table->timestamp('page_date')->nullable();
            $table->timestamp('page_revision')->nullable();
            $table->integer('page_order')->nullable();
            $table->integer('page_status')->default(0);
            $table->string('page_cover')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_pages');
    }
}
