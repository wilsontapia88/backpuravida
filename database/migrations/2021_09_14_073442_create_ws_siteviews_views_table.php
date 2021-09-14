<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsSiteviewsViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_siteviews_views', function (Blueprint $table) {
            $table->integer('views_id')->primary();
            $table->date('views_date')->nullable()->index('idx_1');
            $table->decimal('views_users', 10, 0)->nullable();
            $table->decimal('views_views', 10, 0)->nullable();
            $table->decimal('views_pages', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_siteviews_views');
    }
}
