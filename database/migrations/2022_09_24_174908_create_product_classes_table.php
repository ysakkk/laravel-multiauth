<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->nullable()->index('IDX_1A11D1BA4584665A');
            $table->unsignedInteger('class_category_id1')->nullable()->index('IDX_1A11D1BA248D128');
            $table->unsignedInteger('class_category_id2')->nullable()->index('IDX_1A11D1BA9B418092');
            $table->unsignedInteger('delivery_duration_id')->nullable()->index('IDX_1A11D1BABA4269E');
            $table->string('product_code')->nullable();
            $table->decimal('stock', 10, 0)->nullable();
            $table->boolean('stock_unlimited')->default(false);
            $table->unsignedDecimal('sale_limit', 10, 0)->nullable();
            $table->mediumInteger('price01')->nullable();
            $table->mediumInteger('price02')->index('product_class_price02_idx');
            $table->unsignedMediumInteger('delivery_fees')->nullable();
            $table->boolean('visible')->default(true);
            $table->dateTime('create_date');
            $table->dateTime('update_date');
            $table->string('currency_code')->nullable();

            $table->index(['stock', 'stock_unlimited'], 'product_class_stock_stock_unlimited_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_classes');
    }
}
