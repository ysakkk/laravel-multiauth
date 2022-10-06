<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClassCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('class_categories', function (Blueprint $table) {
            $table->foreign(['class_name_id'], 'FK_9B0D1DBAB462FB2A')->references(['id'])->on('class_names')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('class_categories', function (Blueprint $table) {
            $table->dropForeign('FK_9B0D1DBAB462FB2A');
        });
    }
}
