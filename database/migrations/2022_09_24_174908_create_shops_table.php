<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('pref_id')->nullable()->index('IDX_1D3655F4E171EF5F');
            $table->string('company_name')->nullable();
            $table->string('company_kana')->nullable();
            $table->string('postal_code', 8)->nullable();
            $table->string('addr01')->nullable();
            $table->string('addr02')->nullable();
            $table->string('ceo', 16)->nullable()->comment('代表責任者');
            $table->string('phone_number', 14)->nullable();
            $table->string('email01')->nullable();
            $table->string('email02')->nullable();
            $table->string('other_expense')->nullable();
            $table->string('payment')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('shop_name')->nullable();
            $table->string('shop_kana')->nullable();
            $table->string('shop_name_eng')->nullable();
            $table->string('refund', 256)->nullable();
            $table->unsignedSmallInteger('delivery_fee')->nullable()->default(0);
            $table->unsignedSmallInteger('delivery_free_amount')->nullable()->default(0);
            $table->string('defective', 256)->nullable();
            $table->string('zeus_ipcode', 16)->nullable();
            $table->string('zeus_key', 64)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
