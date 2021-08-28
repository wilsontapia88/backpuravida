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
            $table->id();
            $table->integer('online_id');
            $table->integer('online_user')->default(null);
            $table->string('online_name')->default(null);
            $table->timestamp('online_startview')->nullable()->default(null);
            $table->timestamp('online_endview')->nullable()->default(null);
            $table->string('online_ip')->default(null);
            $table->string('online_url')->default(null);
            $table->string('online_agent')->default(null);
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
        Schema::dropIfExists('ws_siteviews_online');
    }
}
