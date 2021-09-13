<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadStudentCertificates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_student_certificates', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('course_id')->nullable();
            $table->unsignedInteger('enrollment_id')->nullable();
            $table->increments('certificate_id');

            $table->string('certificate_key')->nullable();
            $table->date('certificate_issued')->nullable();
            $table->integer('certificate_status')->default(0);

            $table->foreign('user_id')->references('user_id')->on('ws_users')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade');
            $table->foreign('enrollment_id')->references('enrollment_id')->on('ws_ead_enrollments')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_student_certificates');
    }
}
