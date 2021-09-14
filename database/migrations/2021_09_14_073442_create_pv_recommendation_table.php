<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvRecommendationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_recommendation', function (Blueprint $table) {
            $table->integer('rec_id')->primary();
            $table->string('rec_abv', 6);
            $table->string('rec_title');
            $table->string('rec_name');
            $table->string('rec_specialty');
            $table->string('rec_appointment');
            $table->string('rec_local');
            $table->string('rec_phone');
            $table->string('rec_email');
            $table->string('rec_website');
            $table->string('rec_instagram');
            $table->text('rec_additional_info');
            $table->integer('rec_by');
            $table->timestamp('rec_created')->nullable();
            $table->integer('rec_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pv_recommendation');
    }
}
