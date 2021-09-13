<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadEnrollments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_enrollments', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('course_id')->nullable();
            $table->increments('enrollment_id');
            $table->unsignedInteger('enrollment_order')->nullable();
            $table->unsignedInteger('enrollment_bonus')->nullable();

            $table->integer('enrollment_group')->nullable();
            $table->timestamp('enrollment_start')->nullable();
            $table->timestamp('enrollment_access')->nullable();
            $table->timestamp('enrollment_end')->nullable();
            $table->integer('enrollment_introcourse_watched')->nullable();

            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('ws_users')->onDelete('cascade');
            $table->foreign('enrollment_order')->references('order_id')->on('ws_ead_orders')->onDelete('cascade');
            $table->foreign('enrollment_bonus')->references('enrollment_id')->on('ws_ead_enrollments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_enrollments');
    }
}
