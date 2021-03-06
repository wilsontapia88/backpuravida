<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_orders', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable()->index('wc_ead_order_user');
            $table->unsignedInteger('course_id')->nullable()->index('wc_ead_order_course');
            $table->unsignedInteger('order_id')->primary();
            $table->integer('order_product_id')->nullable();
            $table->string('order_transaction')->nullable();
            $table->integer('order_callback_type')->nullable();
            $table->string('order_off')->nullable();
            $table->decimal('order_price', 10)->default(0.00);
            $table->string('order_currency')->nullable();
            $table->string('order_payment_type')->nullable();
            $table->timestamp('order_purchase_date')->nullable();
            $table->timestamp('order_warranty_date')->nullable();
            $table->timestamp('order_confirmation_purchase_date')->nullable();
            $table->string('order_sck')->nullable();
            $table->string('order_src')->nullable();
            $table->string('order_aff')->nullable();
            $table->string('order_aff_name')->nullable();
            $table->string('order_cms_aff')->default('0.00');
            $table->decimal('order_cms_marketplace', 10)->default(0.00);
            $table->decimal('order_cms_vendor', 10)->default(0.00);
            $table->string('order_status')->nullable();
            $table->timestamp('order_chargeback')->nullable();
            $table->integer('order_delivered')->nullable();
            $table->string('order_signature')->nullable();
            $table->string('order_signature_plan')->nullable();
            $table->integer('order_signature_recurrency')->nullable();
            $table->integer('order_signature_period')->nullable();
            $table->string('order_signature_status', 55)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_orders');
    }
}
