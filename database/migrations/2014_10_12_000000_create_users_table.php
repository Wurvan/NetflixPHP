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
            $table->id('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('surname');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tipo')->nulleable()->default('clients');
            $table->string('profileImg')->nulleable()->default('/img/profile.jpeg');
            $table->boolean('auth')->nulleable()->default(0);
            $table->boolean('block')->nulleable()->default(0);
            $table->bigInteger('creditCard')->nulleable()->default(0);
            $table->integer('cvv')->nulleable()->default(0);
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
