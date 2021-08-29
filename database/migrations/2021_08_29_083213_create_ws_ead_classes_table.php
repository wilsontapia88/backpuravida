<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('module_id');
            $table->string('class_id')->nullable();
            $table->string('class_title')->nullable();
            $table->string('class_thumb')->nullable();
            $table->string('class_name')->nullable();
            $table->string('class_video')->nullable();
            $table->float('class_time', 8, 2)->nullable();
            $table->integer('class_order')->nullable();
            $table->char('class_active', 1);
            $table->string('class_material')->nullable();
            $table->text('class_desc')->nullable();
            $table->integer('class_support')->nullable();
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('ws_ead_courses')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('ws_ead_modules')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_classes');
    }
}
