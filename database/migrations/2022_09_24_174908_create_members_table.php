<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('department')->nullable();
            $table->string('login_id');
            $table->string('password');
            $table->rememberToken();
            $table->string('salt')->nullable();
            $table->string('two_factor_auth_key')->nullable();
            $table->boolean('two_factor_auth_enabled')->default(false);
            $table->timestamp('create_date')->nullable()->useCurrent();
            $table->timestamp('updatedate')->nullable()->useCurrent();
            $table->dateTime('login_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
