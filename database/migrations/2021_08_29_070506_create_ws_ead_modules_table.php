<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('module_title')->nullable();
            $table->string('module_thumb')->nullable();
            $table->text('module_desc')->nullable();
            $table->text('module_desc_vv')->nullable();
            $table->text('module_faq');
            $table->string('module_name')->nullable();
            $table->integer('module_order')->default(0);
            $table->char('module_active',1);
            $table->integer('module_release')->default(0);
            $table->date('module_release_date')->nullable();
            $table->integer('module_required')->default(0);
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('ws_ead_courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_modules');
    }
}
