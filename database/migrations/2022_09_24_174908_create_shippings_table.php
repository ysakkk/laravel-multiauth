<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->nullable()->index('IDX_2EBD22CE8D9F6D38');
            $table->unsignedSmallInteger('pref_id')->nullable()->index('IDX_2EBD22CEE171EF5F');
            $table->string('name01');
            $table->string('name02');
            $table->string('kana01')->nullable();
            $table->string('kana02')->nullable();
            $table->string('company_name')->nullable();
            $table->string('phone_number', 14)->nullable();
            $table->string('postal_code', 8)->nullable();
            $table->string('addr01')->nullable();
            $table->string('addr02')->nullable();
            $table->unsignedInteger('time_id')->nullable();
            $table->dateTime('delivery_date')->nullable();
            $table->dateTime('shipping_date')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('note', 4000)->nullable();
            $table->unsignedSmallInteger('sort_no')->nullable();
            $table->dateTime('create_date');
            $table->dateTime('update_date');
            $table->dateTime('mail_send_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shippings');
    }
}
