<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_properties', function (Blueprint $table) {
            $table->id();
            $table->integer('realty_id')->unsigned();
            $table->string('realty_cover')->default(null);
            $table->string('realty_title')->default(null);
            $table->string('realty_name')->default(null);
            $table->string('realty_ref')->default(null);
            $table->decimal('realty_price', 11, 2)->default(null);
            $table->text('realty_desc')->default(null);
            $table->integer('realty_finality')->default(null);
            $table->integer('realty_type')->default(null);
            $table->decimal('realty_builtarea', 11, 2)->default(null);
            $table->decimal('realty_totalarea', 11, 2)->default(null);
            $table->decimal('realty_bedrooms', 11, 0)->default(null);
            $table->decimal('realty_apartments', 10, 0)->default(null);
            $table->decimal('realty_bathrooms', 11, 0)->default(null);
            $table->decimal('realty_parkings', 10, 0)->default(null);
            $table->text('realty_particulars')->default(null);
            $table->integer('realty_transaction')->default(null);
            $table->string('realty_state')->default(null);
            $table->string('realty_city')->default(null);
            $table->string('realty_district')->default(null);
            $table->timestamp('realty_date')->nullable()->default(null);
            $table->integer('realty_observation')->default(null);
            $table->unsignedBigInteger('realty_contact')->default(null);
            $table->integer('realty_status')->default(0);
            $table->decimal('realty_views', 11, 0)->default(0);
            // $table->foreign('realty_contact')->references('user_id')->on('ws_users')->onDelete('set null');
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
        Schema::dropIfExists('ws_properties');
    }
}
