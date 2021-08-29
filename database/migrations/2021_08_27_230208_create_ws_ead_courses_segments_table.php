<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadCoursesSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_courses_segments', function (Blueprint $table) {
            $table->id();
            $table->string('segment_title')->nullable();
            $table->string('segment_name')->nullable();
            $table->text('segment_desc')->nullable();
            $table->string('segment_order')->nullable();
            $table->string('segment_icon')->nullable();
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
        Schema::dropIfExists('ws_ead_courses_segments');
    }
}
