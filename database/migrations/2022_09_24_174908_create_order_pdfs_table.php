<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pdfs', function (Blueprint $table) {
            $table->unsignedInteger('member_id')->primary();
            $table->string('title')->nullable();
            $table->string('message1')->nullable();
            $table->string('message2')->nullable();
            $table->string('message3')->nullable();
            $table->string('note1')->nullable();
            $table->string('note2')->nullable();
            $table->string('note3')->nullable();
            $table->dateTime('create_date');
            $table->dateTime('update_date');
            $table->boolean('visible')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_pdfs');
    }
}
