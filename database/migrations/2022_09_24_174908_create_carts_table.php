<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->nullable()->index('IDX_FC3C24F09395C3F3');
            $table->string('cart_key')->nullable();
            $table->string('pre_order_id')->nullable()->unique('cart_pre_order_id_idx');
            $table->unsignedMediumInteger('total_price')->default(0);
            $table->unsignedMediumInteger('delivery_fee_total')->default(0);
            $table->unsignedSmallInteger('sort_no')->nullable();
            $table->dateTime('create_date');
            $table->dateTime('update_date')->index('cart_update_date_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
