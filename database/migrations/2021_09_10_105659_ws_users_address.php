<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsUsersAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_users_address', function (Blueprint $table) {
            $table->increments('addr_id');
            $table->unsignedInteger('user_id')->nullable();
            $table->integer('addr_key')->nullable();
            $table->string('addr_name')->nullable();
            $table->string('addr_zipcode')->nullable();
            $table->string('addr_street')->nullable();
            $table->string('addr_number')->nullable();
            $table->string('addr_complement')->nullable();
            $table->string('addr_district')->nullable();
            $table->string('addr_city')->nullable();
            $table->string('addr_state')->nullable();
            $table->string('addr_country')->nullable();

            $table->foreign('user_id')->references('user_id')->on('ws_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_users_address');
    }
}
