<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_tags', function (Blueprint $table) {
            $table->foreign(['product_id'], 'FK_4433E7214584665A')->references(['id'])->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['tag_id'], 'FK_4433E721BAD26311')->references(['id'])->on('tags')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_tags', function (Blueprint $table) {
            $table->dropForeign('FK_4433E7214584665A');
            $table->dropForeign('FK_4433E721BAD26311');
        });
    }
}
