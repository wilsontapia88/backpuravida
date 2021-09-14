<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadStudentDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_student_downloads', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable()->index('ws_download_user');
            $table->string('user_ip')->nullable();
            $table->unsignedInteger('course_id')->nullable()->index('ws_download_course');
            $table->unsignedInteger('class_id')->nullable()->index('ws_download_class');
            $table->unsignedInteger('download_id')->primary();
            $table->string('download_file')->nullable();
            $table->string('download_filename', 2555)->nullable();
            $table->timestamp('download_date')->nullable();
            $table->string('user_location')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->unsignedInteger('material_id')->nullable();
            $table->string('download_filetype', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_student_downloads');
    }
}
