<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shippings', function (Blueprint $table) {
            $table->foreign(['order_id'], 'FK_2EBD22CE8D9F6D38')->references(['id'])->on('orders')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['pref_id'], 'FK_2EBD22CEE171EF5F')->references(['id'])->on('master_prefs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shippings', function (Blueprint $table) {
            $table->dropForeign('FK_2EBD22CE8D9F6D38');
            $table->dropForeign('FK_2EBD22CEE171EF5F');
        });
    }
}
