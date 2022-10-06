<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->foreign(['rounding_type_id'], 'FK_A0C8C3ED1BD5C574')->references(['id'])->on('master_rounding_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['product_class_id'], 'FK_A0C8C3ED21B06187')->references(['id'])->on('product_classes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['product_id'], 'FK_A0C8C3ED4584665A')->references(['id'])->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['shipping_id'], 'FK_A0C8C3ED4887F3F8')->references(['id'])->on('shippings')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['tax_type_id'], 'FK_A0C8C3ED84042C99')->references(['id'])->on('master_tax_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['order_id'], 'FK_A0C8C3ED8D9F6D38')->references(['id'])->on('orders')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['order_item_type_id'], 'FK_A0C8C3EDCAD13EAD')->references(['id'])->on('master_order_item_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeign('FK_A0C8C3ED1BD5C574');
            $table->dropForeign('FK_A0C8C3ED21B06187');
            $table->dropForeign('FK_A0C8C3ED4584665A');
            $table->dropForeign('FK_A0C8C3ED4887F3F8');
            $table->dropForeign('FK_A0C8C3ED84042C99');
            $table->dropForeign('FK_A0C8C3ED8D9F6D38');
            $table->dropForeign('FK_A0C8C3EDCAD13EAD');
        });
    }
}
