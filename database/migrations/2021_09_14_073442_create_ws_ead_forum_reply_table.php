<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadForumReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_forum_reply', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable()->index('wc_ead_forum_user');
            $table->unsignedInteger('enrollment_id')->nullable()->index('wc_ead_forum_reply_enroll');
            $table->unsignedInteger('forum_id')->nullable()->index('wc_ead_forum_class');
            $table->unsignedInteger('response_id')->primary();
            $table->text('response_content')->nullable();
            $table->timestamp('response_open')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_forum_reply');
    }
}
