<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMailHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mail_histories', function (Blueprint $table) {
            $table->foreign(['order_id'], 'FK_4870AB118D9F6D38')->references(['id'])->on('orders')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mail_histories', function (Blueprint $table) {
            $table->dropForeign('FK_4870AB118D9F6D38');
        });
    }
}
