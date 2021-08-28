<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsPropertiesGallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_properties_gallery', function (Blueprint $table) {
            $table->id();
            $table->integer('realty_id')->unsigned()->default(null);
            $table->string('image')->default('null');
            // $table->foreign('realty_id')->references('realty_id')->on('ws_properties')->onDelete('cascade');
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
        Schema::dropIfExists('ws_properties_gallery');
    }
}
