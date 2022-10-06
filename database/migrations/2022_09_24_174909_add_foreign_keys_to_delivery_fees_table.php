<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDeliveryFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_fees', function (Blueprint $table) {
            $table->foreign(['pref_id'], 'FK_4915524E171EF5F')->references(['id'])->on('master_prefs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delivery_fees', function (Blueprint $table) {
            $table->dropForeign('FK_4915524E171EF5F');
        });
    }
}
