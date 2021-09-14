<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_enrollments', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable()->index('wc_ead_student_user');
            $table->unsignedInteger('course_id')->nullable()->index('wc_ead_student_course');
            $table->unsignedInteger('enrollment_id')->primary();
            $table->unsignedInteger('enrollment_order')->nullable()->index('wc_enrollment_order');
            $table->unsignedInteger('enrollment_bonus')->nullable()->index('wc_entollment_bonus');
            $table->integer('enrollment_group')->nullable();
            $table->timestamp('enrollment_start')->nullable();
            $table->timestamp('enrollment_access')->nullable();
            $table->timestamp('enrollment_end')->nullable();
            $table->integer('enrollment_introcourse_watched')->nullable();
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
