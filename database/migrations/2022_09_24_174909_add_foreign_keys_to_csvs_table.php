<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCsvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('csvs', function (Blueprint $table) {
            $table->foreign(['csv_type_id'], 'FK_F55F48C3E8507796')->references(['id'])->on('master_csv_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('csvs', function (Blueprint $table) {
            $table->dropForeign('FK_F55F48C3E8507796');
        });
    }
}
