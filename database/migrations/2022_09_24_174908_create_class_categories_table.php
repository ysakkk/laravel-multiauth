<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_name_id')->nullable()->index('IDX_9B0D1DBAB462FB2A');
            $table->string('backend_name')->nullable();
            $table->string('name');
            $table->unsignedInteger('sort_no');
            $table->boolean('visible')->default(true);
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
        Schema::dropIfExists('class_categories');
    }
}
