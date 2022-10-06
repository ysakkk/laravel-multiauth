<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->nullable()->index('IDX_A0C8C3ED8D9F6D38');
            $table->unsignedInteger('product_id')->nullable()->index('IDX_A0C8C3ED4584665A');
            $table->unsignedInteger('product_class_id')->nullable()->index('IDX_A0C8C3ED21B06187');
            $table->unsignedInteger('shipping_id')->nullable()->index('IDX_A0C8C3ED4887F3F8');
            $table->unsignedSmallInteger('rounding_type_id')->nullable()->index('IDX_A0C8C3ED1BD5C574');
            $table->unsignedSmallInteger('tax_type_id')->nullable()->index('IDX_A0C8C3ED84042C99');
            $table->unsignedSmallInteger('order_item_type_id')->nullable()->index('IDX_A0C8C3EDCAD13EAD');
            $table->string('product_name');
            $table->string('product_code')->nullable();
            $table->string('class_name1')->nullable();
            $table->string('class_name2')->nullable();
            $table->string('class_category_name1')->nullable();
            $table->string('class_category_name2')->nullable();
            $table->mediumInteger('price')->default(0);
            $table->decimal('quantity', 10, 0)->default(0);
            $table->decimal('tax', 10, 0)->default(0);
            $table->unsignedDecimal('tax_rate', 10, 0)->default(0);
            $table->unsignedDecimal('tax_adjust', 10, 0)->default(0);
            $table->unsignedSmallInteger('tax_rule_id')->nullable();
            $table->string('currency_code')->nullable();
            $table->string('processor_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
