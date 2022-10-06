<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->nullable()->index('IDX_1D66D8079395C3F3');
            $table->unsignedSmallInteger('pref_id')->nullable()->index('IDX_1D66D807E171EF5F');
            $table->unsignedSmallInteger('job_id')->nullable()->index('IDX_1D66D807BE04EA9');
            $table->unsignedInteger('payment_id')->nullable()->index('IDX_1D66D8074C3A3BB');
            $table->string('pre_order_id')->nullable()->unique('order_pre_order_id_idx');
            $table->string('order_no')->nullable()->index('order_order_no_idx');
            $table->string('message', 4000)->nullable();
            $table->string('name01');
            $table->string('name02');
            $table->string('kana01')->nullable();
            $table->string('kana02')->nullable();
            $table->string('company_name')->nullable();
            $table->string('email')->nullable()->index('order_email_idx');
            $table->string('phone_number', 14)->nullable();
            $table->string('postal_code', 8)->nullable();
            $table->string('addr01')->nullable();
            $table->string('addr02')->nullable();
            $table->dateTime('birth')->nullable();
            $table->unsignedMediumInteger('subtotal')->default(0);
            $table->unsignedMediumInteger('discount')->default(0);
            $table->unsignedMediumInteger('delivery_fee_total')->default(0);
            $table->unsignedMediumInteger('charge')->default(0);
            $table->unsignedMediumInteger('tax')->default(0);
            $table->unsignedMediumInteger('total')->default(0);
            $table->unsignedMediumInteger('payment_total')->default(0);
            $table->string('payment_method')->nullable();
            $table->string('note', 4000)->nullable();
            $table->dateTime('create_date');
            $table->dateTime('update_date')->index('order_update_date_idx');
            $table->dateTime('order_date')->nullable()->index('order_order_date_idx');
            $table->dateTime('payment_date')->nullable()->index('order_payment_date_idx');
            $table->string('currency_code')->nullable();
            $table->longText('complete_message')->nullable();
            $table->longText('complete_mail_message')->nullable();
            $table->unsignedSmallInteger('order_status_id')->nullable()->index('IDX_1D66D807D7707B45');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
