<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadStudentCertificatesTable extends Migration
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
            $table->unsignedInteger('certificate_id');
            $table->string('certificate_key')->nullable();
            $table->date('certificate_issued')->nullable();
            $table->integer('certificate_status')->default(0);
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
