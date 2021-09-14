<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_gallery', function (Blueprint $table) {
            $table->integer('gallery_image_id')->primary();
            $table->integer('gallery_id');
            $table->string('gallery_image');
            $table->string('gallery_image2x');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_gallery');
    }
}
