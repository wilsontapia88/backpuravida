<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_config', function (Blueprint $table) {
            $table->unsignedInteger('conf_id')->primary();
            $table->string('conf_key')->nullable()->default('');
            $table->string('conf_value')->nullable()->default('');
            $table->string('conf_type')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_config');
    }
}
