<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('last_name_1');
            $table->string('last_name_2');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone', 30)->nullable();
            $table->string('mobile', 30)->nullable();
            $table->string('street_address', 200)->nullable();
            $table->string('colony', 200)->nullable();
            $table->string('exterior_number', 10)->nullable();
            $table->string('interior_number')->nullable();
            $table->string('postal_zip', 10)->nullable();
            $table->string('city', 200)->nullable();
            $table->string('state', 200)->nullable();
            $table->string('role')->nullable();
            $table->string('password', 60);
            $table->boolean('active');

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
