<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_posts', function (Blueprint $table) {
            $table->unsignedInteger('post_id')->primary();
            $table->string('post_name')->default('');
            $table->string('post_title')->nullable();
            $table->text('post_subtitle')->nullable();
            $table->longText('post_content')->nullable();
            $table->string('post_cover')->nullable();
            $table->string('post_video')->nullable();
            $table->timestamp('post_date')->nullable();
            $table->unsignedInteger('post_author')->nullable()->index('wc_post_author');
            $table->integer('post_category')->nullable()->index('wc_posts');
            $table->string('post_category_parent')->nullable();
            $table->decimal('post_views', 10, 0)->nullable()->default(0);
            $table->timestamp('post_lastview')->nullable();
            $table->integer('post_status')->default(0);
            $table->string('post_type')->nullable();
            $table->integer('post_instant_article')->nullable();
            $table->integer('post_amp')->nullable();
            $table->string('post_tags')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_posts');
    }
}
