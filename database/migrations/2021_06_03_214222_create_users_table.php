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
            $table->id();
            $table->string('user_name');
            $table->string('user_ci');
            $table->string('user_cellphone');
            $table->date('user_date');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->unsignedBigInteger('user_city_id')->nullable();
            $table->boolean('user_rol');

            $table->foreign('user_city_id')->references('city_id')->on('cities')->onDelete('set null');


            $table->timestamp('email_verified_at')->nullable();
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
