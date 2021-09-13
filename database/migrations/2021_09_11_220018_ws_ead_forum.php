<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadForum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_forum', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('enrollment_id')->nullable();
            $table->unsignedInteger('class_id')->nullable();
            $table->increments('forum_id');

            $table->text('forum_content')->nullable();
            $table->integer('forum_status')->nullable();
            $table->timestamp('forum_open')->nullable();
            $table->timestamp('forum_reply')->nullable();
            $table->timestamp('forum_close')->nullable();
            $table->integer('forum_review')->nullable();
            $table->text('forum_comment')->nullable();
            $table->integer('forum_published')->nullable();

            $table->foreign('user_id')->references('user_id')->on('ws_users')->onDelete('cascade');
            $table->foreign('enrollment_id')->references('enrollment_id')->on('ws_ead_enrollments')->onDelete('cascade');
            $table->foreign('class_id')->references('class_id')->on('ws_ead_classes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_forum');
    }
}
