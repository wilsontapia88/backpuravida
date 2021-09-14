<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadForumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_forum', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable()->index('wc_ead_forum_user');
            $table->unsignedInteger('enrollment_id')->nullable()->index('wc_ead_student_class');
            $table->unsignedInteger('class_id')->nullable()->index('wc_ead_forum_class');
            $table->unsignedInteger('forum_id')->primary();
            $table->text('forum_content')->nullable();
            $table->integer('forum_status')->nullable();
            $table->timestamp('forum_open')->nullable();
            $table->timestamp('forum_reply')->nullable();
            $table->timestamp('forum_close')->nullable();
            $table->integer('forum_review')->nullable();
            $table->text('forum_comment')->nullable();
            $table->integer('forum_published')->nullable();
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
