<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterOrderStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_order_statuses', function (Blueprint $table) {
            $table->unsignedSmallInteger('id')->primary();
            $table->boolean('display_order_count')->default(false);
            $table->string('name');
            $table->unsignedSmallInteger('sort_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_order_statuses');
    }
}
