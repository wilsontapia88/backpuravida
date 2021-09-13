<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WorkcontrolCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workcontrol_code', function (Blueprint $table) {
            $table->increments('code_id');
            $table->string('code_name');
            $table->string('code_condition');
            $table->text('code_script')->nullable();
            $table->timestamp('code_created')->nullable();
            $table->decimal('code_views', 11,0)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workcontrol_code');
    }
}
