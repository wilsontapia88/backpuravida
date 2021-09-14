<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsUsersNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_users_notes', function (Blueprint $table) {
            $table->unsignedInteger('note_id')->primary();
            $table->unsignedInteger('user_id')->nullable()->index('note_user_id');
            $table->unsignedInteger('admin_id')->nullable()->index('note_admin_id');
            $table->string('note_text')->nullable();
            $table->timestamp('note_datetime')->nullable();
            $table->integer('note_status')->nullable();
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
