<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadCoursesBonusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_courses_bonus', function (Blueprint $table) {
            $table->unsignedInteger('course_id')->nullable()->index('wc_ead_course_bonus');
            $table->unsignedInteger('bonus_id')->primary();
            $table->unsignedInteger('bonus_course_id')->nullable()->index('wc_ead_bonus_id');
            $table->integer('bonus_ever')->nullable();
            $table->date('bonus_ever_date')->nullable();
            $table->integer('bonus_wait')->nullable();
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
