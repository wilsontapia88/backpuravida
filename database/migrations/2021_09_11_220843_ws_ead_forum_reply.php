<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadForumReply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_forum_reply', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('enrollment_id')->nullable();
            $table->unsignedInteger('forum_id')->nullable();
            $table->increments('response_id');

            $table->text('response_content')->nullable();
            $table->timestamp('response_open')->nullable();

            $table->foreign('user_id')->references('user_id')->on('ws_users')->onDelete('cascade');
            $table->foreign('enrollment_id')->references('enrollment_id')->on('ws_ead_enrollments')->onDelete('cascade');
            $table->foreign('forum_id')->references('forum_id')->on('ws_ead_forum')->onDelete('cascade');

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
