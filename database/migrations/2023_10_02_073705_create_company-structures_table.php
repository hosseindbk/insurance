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
        Schema::create('company-structures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_executive_company')->nullable();
            $table->foreign('id_executive_company')->references('id')->on('company_insurance_executives')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title')->nullable();
            $table->integer('sub')->nullable();
            $table->text('description')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('deleted')->nullable();
            $table->integer('priority')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('company-structures');
    }
};
