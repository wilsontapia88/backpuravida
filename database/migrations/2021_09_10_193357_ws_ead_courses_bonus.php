<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadCoursesBonus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_courses_bonus', function (Blueprint $table) {
            $table->unsignedInteger('course_id')->nullable();
            $table->increments('bonus_id');
            // $table->unsignedInteger('bonus_course_id')->nullable();

            $table->integer('bonus_ever')->nullable();
            $table->date('bonus_ever_date')->nullable();
            $table->integer('bonus_wait')->nullable();

            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade');
            // $table->foreign('bonus_course_id')->references('bonus_course_id')->on('ws_ead_courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_courses_bonus');
    }
}
