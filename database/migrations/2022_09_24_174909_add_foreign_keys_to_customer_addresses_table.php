<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_addresses', function (Blueprint $table) {
            $table->foreign(['customer_id'], 'FK_6C38C0F89395C3F3')->references(['id'])->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['pref_id'], 'FK_6C38C0F8E171EF5F')->references(['id'])->on('master_prefs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_addresses', function (Blueprint $table) {
            $table->dropForeign('FK_6C38C0F89395C3F3');
            $table->dropForeign('FK_6C38C0F8E171EF5F');
        });
    }
}
