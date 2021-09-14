<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsUsersAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_users_address', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->index('wc_users_address');
            $table->integer('addr_id')->primary();
            $table->integer('addr_key')->nullable();
            $table->string('addr_name')->nullable();
            $table->string('addr_zipcode')->nullable();
            $table->string('addr_street')->nullable();
            $table->string('addr_number')->nullable();
            $table->string('addr_complement')->nullable();
            $table->string('addr_district')->nullable();
            $table->string('addr_city')->nullable();
            $table->string('addr_state', 2)->nullable();
            $table->string('addr_country')->nullable();
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
