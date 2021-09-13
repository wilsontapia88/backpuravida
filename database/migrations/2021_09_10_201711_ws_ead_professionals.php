<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadProfessionals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_professionals', function (Blueprint $table) {
            $table->increments('pro_id');
            $table->string('pro_photo')->nullable();
            $table->string('pro_thumb')->nullable();
            $table->string('pro_name')->nullable();
            $table->string('pro_lastname')->nullable();
            $table->string('pro_prof')->nullable();
            $table->string('pro_city')->nullable();
            $table->string('pro_state')->nullable();
            $table->string('pro_phone')->nullable();
            $table->string('pro_email')->nullable();
            $table->string('pro_site')->nullable();
            $table->string('pro_face')->nullable();
            $table->string('pro_insta')->nullable();
            $table->integer('pro_status')->default(0);
            $table->text('pro_form')->nullable();
            $table->timestamp('pro_created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_professionals');
    }
}
