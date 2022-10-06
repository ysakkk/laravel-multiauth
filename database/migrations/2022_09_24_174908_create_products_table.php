<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('product_status_id')->nullable()->index('IDX_C49DE22F557B630');
            $table->string('name');
            $table->string('note', 4000)->nullable();
            $table->string('description_list', 4000)->nullable();
            $table->string('description_detail', 4000)->nullable();
            $table->string('search_word', 4000)->nullable();
            $table->longText('free_area')->nullable();
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
        Schema::dropIfExists('products');
    }
}
