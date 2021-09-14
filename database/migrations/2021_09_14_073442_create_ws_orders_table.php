<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_orders', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable()->index('wc_order_user');
            $table->unsignedInteger('order_id')->primary();
            $table->integer('order_status')->default(0);
            $table->integer('order_payment')->default(1);
            $table->decimal('order_price', 11)->default(0.00);
            $table->decimal('order_installments', 10, 0)->nullable();
            $table->decimal('order_installment', 11)->nullable();
            $table->decimal('order_coupon', 11, 0)->nullable();
            $table->decimal('order_free', 11)->nullable();
            $table->string('order_billet')->nullable();
            $table->string('order_code')->nullable();
            $table->integer('order_addr')->nullable();
            $table->integer('order_shipcode')->nullable();
            $table->decimal('order_shipprice', 11)->nullable();
            $table->date('order_shipment')->nullable();
            $table->string('order_tracking')->nullable();
            $table->string('order_nfepdf')->nullable();
            $table->string('order_nfexml')->nullable();
            $table->timestamp('order_date')->nullable();
            $table->timestamp('order_update')->nullable();
            $table->integer('order_mail_processing')->nullable();
            $table->integer('order_mail_completed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_orders');
    }
}
