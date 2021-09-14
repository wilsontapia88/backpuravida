<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_slides', function (Blueprint $table) {
            $table->unsignedInteger('slide_id')->primary();
            $table->integer('slide_status')->default(0);
            $table->string('slide_image')->nullable();
            $table->string('slide_title')->nullable();
            $table->text('slide_desc')->nullable();
            $table->string('slide_link')->nullable();
            $table->timestamp('slide_date')->nullable();
            $table->timestamp('slide_start')->nullable();
            $table->timestamp('slide_end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_slides');
    }
}
