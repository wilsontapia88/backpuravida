<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_comments', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->unsignedInteger('user_id')->nullable()->index('wc_comment_user');
            $table->unsignedInteger('post_id')->nullable()->index('wc_comment_post');
            $table->unsignedInteger('pdt_id')->nullable()->index('wc_comment_pdt');
            $table->unsignedInteger('page_id')->nullable()->index('wc_comment_pages');
            $table->unsignedInteger('alias_id')->nullable()->index('wc_comment_response');
            $table->text('comment')->nullable();
            $table->decimal('rank', 11, 0)->nullable()->default(1);
            $table->timestamp('created')->nullable();
            $table->timestamp('interact')->nullable();
            $table->integer('status')->default(0);
            $table->decimal('likes', 11, 0)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_comments');
    }
}
