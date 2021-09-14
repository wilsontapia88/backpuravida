<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsPropertiesGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_properties_gallery', function (Blueprint $table) {
            $table->unsignedInteger('realty_id')->nullable()->index('wc_properties_gallery');
            $table->unsignedInteger('id')->primary();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_properties_gallery');
    }
}
