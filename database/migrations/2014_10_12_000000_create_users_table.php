<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('national_code' , 10)->nullable();
            $table->string('mobile' , 11)->nullable();
            $table->string('image')->nullable();
            $table->string('birthday')->nullable();
            $table->string('personal_code' , 20)->nullable();
            $table->string('date_start', 10)->nullable();
            $table->string('date_end' , 10)->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('deleted')->nullable();
            $table->integer('priority')->nullable();
            $table->integer('status')->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->string('username');
            $table->string('password');
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
};
