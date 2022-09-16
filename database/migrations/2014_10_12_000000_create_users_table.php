<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('h_id');
            $table->string('ic')->unique();
            $table->string('coach');
            $table->bigInteger('phone')->unique();
            $table->string('address');
            $table->integer('gender');
            $table->integer('age');
            $table->double('weight');
            $table->double('height');
            $table->string('username')->unique();
            $table->string('gmail')->unique();
            $table->string('password');
            $table->integer('role');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
