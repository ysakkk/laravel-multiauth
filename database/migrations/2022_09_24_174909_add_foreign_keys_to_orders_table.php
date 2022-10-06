<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign(['payment_id'], 'FK_1D66D8074C3A3BB')->references(['id'])->on('payments')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['customer_id'], 'FK_1D66D8079395C3F3')->references(['id'])->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['job_id'], 'FK_1D66D807BE04EA9')->references(['id'])->on('master_jobs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['pref_id'], 'FK_1D66D807E171EF5F')->references(['id'])->on('master_prefs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('FK_1D66D8074C3A3BB');
            $table->dropForeign('FK_1D66D8079395C3F3');
            $table->dropForeign('FK_1D66D807BE04EA9');
            $table->dropForeign('FK_1D66D807E171EF5F');
        });
    }
}
