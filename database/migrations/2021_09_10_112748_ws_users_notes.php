<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsUsersNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_users_notes', function (Blueprint $table) {
            $table->increments('note_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('admin_id');
            $table->string('note_text')->nullable();
            $table->timestamp('note_datetime')->nullable();
            $table->integer('note_status')->nullable();

            $table->foreign('user_id')->references('user_id')->on('ws_users')->onDelete('cascade');
            $table->foreign('admin_id')->references('user_id')->on('ws_users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_users_notes');
    }
}
