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
            $table->unsignedInteger('realty_id')->primary();
            $table->string('realty_cover')->nullable();
            $table->string('realty_title')->nullable();
            $table->string('realty_name')->nullable();
            $table->string('realty_ref')->nullable();
            $table->decimal('realty_price', 11)->nullable();
            $table->text('realty_desc')->nullable();
            $table->integer('realty_finality')->nullable();
            $table->integer('realty_type')->nullable();
            $table->decimal('realty_builtarea', 11)->nullable();
            $table->decimal('realty_totalarea', 11)->nullable();
            $table->decimal('realty_bedrooms', 11, 0)->nullable();
            $table->decimal('realty_apartments', 10, 0)->nullable();
            $table->decimal('realty_bathrooms', 11, 0)->nullable();
            $table->decimal('realty_parkings', 10, 0)->nullable();
            $table->text('realty_particulars')->nullable();
            $table->integer('realty_transaction')->nullable();
            $table->string('realty_state', 10)->nullable();
            $table->string('realty_city')->nullable();
            $table->string('realty_district')->nullable();
            $table->timestamp('realty_date')->nullable();
            $table->integer('realty_observation')->nullable();
            $table->unsignedInteger('realty_contact')->nullable()->index('wc_propertie_author');
            $table->integer('realty_status')->default(0);
            $table->decimal('realty_views', 11, 0)->default(0);
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
