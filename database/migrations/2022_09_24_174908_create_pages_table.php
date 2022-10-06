<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('master_page_id')->nullable()->index('IDX_E3951A67D0618E8C');
            $table->string('page_name')->nullable();
            $table->string('url')->index('page_url_idx');
            $table->string('file_name')->nullable();
            $table->unsignedSmallInteger('edit_type')->default(1);
            $table->string('author')->nullable();
            $table->string('description')->nullable();
            $table->string('keyword')->nullable();
            $table->dateTime('create_date');
            $table->dateTime('update_date');
            $table->string('meta_robots')->nullable();
            $table->string('meta_tags', 4000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
