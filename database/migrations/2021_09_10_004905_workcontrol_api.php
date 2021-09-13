<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WorkcontrolApi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workcontrol_api', function (Blueprint $table) {
            $table->increments('api_id');
            $table->string('api_key')->default('');
            $table->string('api_token')->default('');
            $table->timestamp('api_date')->nullable();
            $table->integer('api_status')->default(0);
            $table->integer('api_loads')->default(0);
            $table->timestamp('api_lastload')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workcontrol_api');
    }
}
