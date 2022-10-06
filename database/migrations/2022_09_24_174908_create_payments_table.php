<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_method')->nullable();
            $table->unsignedMediumInteger('charge')->nullable()->default(0);
            $table->unsignedMediumInteger('rule_max')->nullable();
            $table->unsignedSmallInteger('sort_no')->nullable();
            $table->boolean('fixed')->default(true);
            $table->string('payment_image')->nullable();
            $table->unsignedMediumInteger('rule_min')->nullable();
            $table->string('method_class')->nullable();
            $table->boolean('visible')->default(true);
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
        Schema::dropIfExists('payments');
    }
}
