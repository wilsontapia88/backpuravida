<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkcontrolCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workcontrol_code', function (Blueprint $table) {
            $table->unsignedInteger('code_id')->primary();
            $table->string('code_name')->nullable()->default('');
            $table->string('code_condition')->nullable()->default('');
            $table->text('code_script')->nullable();
            $table->timestamp('code_created')->nullable();
            $table->decimal('code_views', 11, 0)->default(0);
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
