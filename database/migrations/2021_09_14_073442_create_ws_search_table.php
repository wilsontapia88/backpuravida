<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsSearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_search', function (Blueprint $table) {
            $table->unsignedInteger('search_id')->primary();
            $table->string('search_key')->nullable();
            $table->decimal('search_count', 11, 0)->nullable();
            $table->timestamp('search_date')->nullable();
            $table->timestamp('search_commit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_search');
    }
}
