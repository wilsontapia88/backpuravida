<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsSiteviewsOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_siteviews_online', function (Blueprint $table) {
            $table->integer('online_id')->primary();
            $table->integer('online_user')->nullable();
            $table->string('online_name')->nullable();
            $table->timestamp('online_startview')->nullable();
            $table->timestamp('online_endview')->nullable();
            $table->string('online_ip')->nullable();
            $table->string('online_url')->nullable();
            $table->string('online_agent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_siteviews_online');
    }
}
