<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsSearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_search', function (Blueprint $table) {
            $table->id();
            $table->integer('search_id')->unsigned();
            $table->string('search_key')->default(null);
            $table->decimal('search_count', 11, 0)->default(null);
            $table->timestamp('search_date')->nullable()->default(null);
            $table->timestamp('search_commit')->nullable()->default(null);
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
        Schema::dropIfExists('ws_search');
    }
}
