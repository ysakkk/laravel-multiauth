<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cart_items', function (Blueprint $table) {
            $table->foreign(['cart_id'], 'FK_B0228F741AD5CDBF')->references(['id'])->on('carts')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['product_class_id'], 'FK_B0228F7421B06187')->references(['id'])->on('product_classes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart_items', function (Blueprint $table) {
            $table->dropForeign('FK_B0228F741AD5CDBF');
            $table->dropForeign('FK_B0228F7421B06187');
        });
    }
}
