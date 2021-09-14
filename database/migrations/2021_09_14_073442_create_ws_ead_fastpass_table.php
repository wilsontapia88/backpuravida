<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadFastpassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_fastpass', function (Blueprint $table) {
            $table->integer('fastpass_id')->primary();
            $table->integer('user_id');
            $table->integer('course_id');
            $table->integer('module_id');
            $table->dateTime('fastpass_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_fastpass');
    }
}
