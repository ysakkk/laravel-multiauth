<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->nullable()->index('IDX_6C38C0F89395C3F3');
            $table->unsignedSmallInteger('pref_id')->nullable()->index('IDX_6C38C0F8E171EF5F');
            $table->string('name01');
            $table->string('name02');
            $table->string('kana01')->nullable();
            $table->string('kana02')->nullable();
            $table->string('company_name')->nullable();
            $table->string('postal_code', 8)->nullable();
            $table->string('addr01')->nullable();
            $table->string('addr02')->nullable();
            $table->string('phone_number', 14)->nullable();
            $table->dateTime('create_date');
            $table->dateTime('update_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_addresses');
    }
}
