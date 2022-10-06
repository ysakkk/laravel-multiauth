<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_classes', function (Blueprint $table) {
            $table->foreign(['class_category_id1'], 'FK_1A11D1BA248D128')->references(['id'])->on('class_categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['product_id'], 'FK_1A11D1BA4584665A')->references(['id'])->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['class_category_id2'], 'FK_1A11D1BA9B418092')->references(['id'])->on('class_categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['delivery_duration_id'], 'FK_1A11D1BABA4269E')->references(['id'])->on('delivery_durations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_classes', function (Blueprint $table) {
            $table->dropForeign('FK_1A11D1BA248D128');
            $table->dropForeign('FK_1A11D1BA4584665A');
            $table->dropForeign('FK_1A11D1BA9B418092');
            $table->dropForeign('FK_1A11D1BABA4269E');
        });
    }
}
