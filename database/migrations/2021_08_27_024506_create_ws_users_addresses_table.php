<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsUsersAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_users_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
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
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_users_addresses');
    }
}
