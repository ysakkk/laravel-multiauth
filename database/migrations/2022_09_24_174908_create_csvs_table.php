<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csvs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('csv_type_id')->nullable()->index('IDX_F55F48C3E8507796');
            $table->string('entity_name');
            $table->string('field_name');
            $table->string('reference_field_name')->nullable();
            $table->string('disp_name');
            $table->unsignedSmallInteger('sort_no');
            $table->boolean('enabled')->default(true);
            $table->dateTime('create_date');
            $table->dateTime('update_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csvs');
    }
}
