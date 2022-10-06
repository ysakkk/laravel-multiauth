<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTaxRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tax_rules', function (Blueprint $table) {
            $table->foreign(['rounding_type_id'], 'FK_59F696DE1BD5C574')->references(['id'])->on('master_rounding_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['product_class_id'], 'FK_59F696DE21B06187')->references(['id'])->on('product_classes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['product_id'], 'FK_59F696DE4584665A')->references(['id'])->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['pref_id'], 'FK_59F696DEE171EF5F')->references(['id'])->on('master_prefs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tax_rules', function (Blueprint $table) {
            $table->dropForeign('FK_59F696DE1BD5C574');
            $table->dropForeign('FK_59F696DE21B06187');
            $table->dropForeign('FK_59F696DE4584665A');
            $table->dropForeign('FK_59F696DEE171EF5F');
        });
    }
}
