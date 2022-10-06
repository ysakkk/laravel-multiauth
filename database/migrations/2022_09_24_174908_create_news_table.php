<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('publish_date')->nullable();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('url', 4000)->nullable();
            $table->boolean('link_method')->default(false);
            $table->dateTime('create_date');
            $table->dateTime('update_date');
            $table->boolean('visible')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
