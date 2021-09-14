<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvRedirectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_redirection', function (Blueprint $table) {
            $table->integer('redirection_id')->primary();
            $table->string('redirection_title');
            $table->string('redirection_name');
            $table->string('redirection_url');
            $table->string('redirection_destination');
            $table->integer('redirection_status');
            $table->integer('redirection_by');
            $table->timestamp('redirection_created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pv_redirection');
    }
}
