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
            $table->id();
            $table->integer('slide_id')->unsigned();
            $table->integer('slide_status')->default(0);
            $table->string('slide_image')->default(null);
            $table->string('slide_tilte')->default(null);
            $table->text('slide_desc')->default(null);
            $table->string('slide_link')->default(null);
            $table->timestamp('slide_date')->nullable()->default(null);
            $table->timestamp('slide_start')->nullable()->default(null);
            $table->timestamp('slide_end')->nullable()->default(null);
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
        Schema::dropIfExists('ws_slides');
    }
}
