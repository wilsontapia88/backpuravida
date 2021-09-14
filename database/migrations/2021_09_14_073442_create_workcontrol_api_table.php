<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkcontrolApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workcontrol_api', function (Blueprint $table) {
            $table->unsignedInteger('api_id')->primary();
            $table->string('api_key')->nullable()->default('');
            $table->string('api_token')->nullable()->default('');
            $table->timestamp('api_date')->nullable();
            $table->integer('api_status')->nullable()->default(0);
            $table->integer('api_loads')->nullable()->default(0);
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
