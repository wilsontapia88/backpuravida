<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadCoursesSegments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_courses_segments', function (Blueprint $table) {
            $table->increments('segment_id')->nullabble();
            $table->string('segment_title')->nullabble();
            $table->string('segment_name')->nullabble();
            $table->text('segment_desc')->nullabble();
            $table->integer('segment_order')->nullabble();
            $table->string('segment_icon')->nullabble();
            $table->timestamp('segment_created')->nullabble();
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
