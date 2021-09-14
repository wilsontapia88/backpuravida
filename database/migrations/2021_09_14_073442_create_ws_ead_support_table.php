<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadSupportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_support', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable()->index('wc_ead_support_user');
            $table->unsignedInteger('enrollment_id')->nullable()->index('wc_ead_student_class');
            $table->unsignedInteger('class_id')->nullable()->index('wc_ead_support_class');
            $table->unsignedInteger('support_id')->primary();
            $table->text('support_content')->nullable();
            $table->integer('support_status')->nullable();
            $table->timestamp('support_open')->nullable();
            $table->timestamp('support_reply')->nullable();
            $table->timestamp('support_close')->nullable();
            $table->integer('support_review')->nullable();
            $table->text('support_comment')->nullable();
            $table->integer('support_published')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_support');
    }
}
