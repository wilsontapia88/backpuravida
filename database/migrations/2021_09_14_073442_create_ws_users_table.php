<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_users', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->primary();
            $table->string('user_thumb')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_lastname')->nullable();
            $table->string('user_document')->nullable();
            $table->integer('user_document_check')->nullable();
            $table->integer('user_genre')->nullable();
            $table->date('user_datebirth')->nullable();
            $table->string('user_telephone')->nullable();
            $table->string('user_cell')->nullable();
            $table->string('user_email')->default('');
            $table->string('user_password')->default('');
            $table->string('user_channel')->nullable();
            $table->timestamp('user_registration')->nullable();
            $table->timestamp('user_lastupdate')->nullable();
            $table->timestamp('user_lastaccess')->nullable();
            $table->string('user_login')->nullable();
            $table->string('user_login_cookie')->nullable();
            $table->integer('user_level')->default(1);
            $table->string('user_facebook')->nullable();
            $table->string('user_twitter')->nullable();
            $table->string('user_youtube')->nullable();
            $table->string('user_google')->nullable();
            $table->string('user_document_name')->nullable();
            $table->string('user_blocking_reason')->nullable();
            $table->integer('user_agreement')->nullable()->default(0);
            $table->integer('user_videointro')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_users');
    }
}
