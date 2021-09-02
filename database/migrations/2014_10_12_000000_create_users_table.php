<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_thumb')->nullable();
            $table->string('user_lastname')->nullable();
            $table->integer('user_document')->nullable();
            $table->string('user_document_check')->nullable();
            $table->integer('user_genre')->nullable();
            $table->date('user_datebirth')->nullable();
            $table->string('user_telephone')->nullable();
            $table->string('user_cell')->nullable();
            $table->string('user_channel')->nullable();
            $table->dateTime('user_lastaccess')->nullable();
            $table->integer('user_level')->nullable();
            $table->string('user_facebook')->nullable();
            $table->string('user_twitter')->nullable();
            $table->string('user_youtube')->nullable();
            $table->string('user_google')->nullable();
            $table->string('user_document_name')->nullable();
            $table->string('user_blocking_reason')->nullable();
            $table->integer('user_agreement')->nullable();
            $table->integer('user_videointro')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
