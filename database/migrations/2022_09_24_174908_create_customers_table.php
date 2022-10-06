<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('customer_status_id')->nullable()->index('IDX_8298BBE3C00AF8A7');
            $table->unsignedSmallInteger('job_id')->nullable()->index('IDX_8298BBE3BE04EA9');
            $table->unsignedSmallInteger('pref_id')->nullable()->index('IDX_8298BBE3E171EF5F');
            $table->string('name01');
            $table->string('name02');
            $table->string('kana01')->nullable();
            $table->string('kana02')->nullable();
            $table->string('company_name')->nullable();
            $table->string('postal_code', 8)->nullable();
            $table->string('addr01')->nullable();
            $table->string('addr02')->nullable();
            $table->string('email')->index('customer_email_idx');
            $table->string('phone_number', 14)->nullable();
            $table->dateTime('birth')->nullable();
            $table->string('password');
            $table->string('salt')->nullable();
            $table->string('secret_key')->unique('secret_key');
            $table->string('note', 4000)->nullable();
            $table->string('reset_key')->nullable();
            $table->dateTime('reset_expire')->nullable();
            $table->dateTime('create_date')->useCurrent()->index('customer_create_date_idx');
            $table->dateTime('update_date')->useCurrent()->index('customer_update_date_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
