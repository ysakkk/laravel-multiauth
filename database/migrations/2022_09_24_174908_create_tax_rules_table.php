<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_class_id')->nullable()->index('IDX_59F696DE21B06187');
            $table->unsignedSmallInteger('pref_id')->nullable()->index('IDX_59F696DEE171EF5F');
            $table->unsignedInteger('product_id')->nullable()->index('IDX_59F696DE4584665A');
            $table->unsignedSmallInteger('rounding_type_id')->nullable()->index('IDX_59F696DE1BD5C574');
            $table->unsignedDecimal('tax_rate', 10, 0)->default(0);
            $table->unsignedDecimal('tax_adjust', 10, 0)->default(0);
            $table->dateTime('apply_date');
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
        Schema::dropIfExists('tax_rules');
    }
}
