<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_events', function (Blueprint $table) {
            $table->unsignedInteger('event_id')->primary();
            $table->unsignedInteger('event_by');
            $table->string('event_title')->nullable();
            $table->string('event_name')->nullable();
            $table->string('event_cover')->nullable();
            $table->string('event_image_1')->nullable();
            $table->string('event_image_2')->nullable();
            $table->string('event_image_3')->nullable();
            $table->string('event_image_4')->nullable();
            $table->string('event_image_5')->nullable();
            $table->text('event_headline')->nullable();
            $table->text('event_description')->nullable();
            $table->text('event_description_col1')->nullable();
            $table->text('event_description_col2')->nullable();
            $table->text('event_comments')->nullable();
            $table->text('event_comments_more')->nullable();
            $table->string('event_city')->nullable();
            $table->string('event_state', 2)->nullable();
            $table->string('event_country', 50)->nullable();
            $table->string('event_location')->nullable();
            $table->decimal('event_price', 11)->nullable();
            $table->string('event_installments')->nullable();
            $table->string('event_conditions')->nullable();
            $table->integer('event_tickets')->nullable();
            $table->integer('event_available')->nullable();
            $table->timestamp('event_date')->nullable();
            $table->timestamp('event_date_end')->nullable();
            $table->integer('event_status')->nullable()->default(0);
            $table->timestamp('event_created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_events');
    }
}
