<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->foreign(['job_id'], 'FK_8298BBE3BE04EA9')->references(['id'])->on('master_jobs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['customer_status_id'], 'FK_8298BBE3C00AF8A7')->references(['id'])->on('master_customer_statuses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['pref_id'], 'FK_8298BBE3E171EF5F')->references(['id'])->on('master_prefs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropForeign('FK_8298BBE3BE04EA9');
            $table->dropForeign('FK_8298BBE3C00AF8A7');
            $table->dropForeign('FK_8298BBE3E171EF5F');
        });
    }
}
