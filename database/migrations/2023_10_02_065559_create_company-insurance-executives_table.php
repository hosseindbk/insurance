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
        Schema::create('company-insurance-executives', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_base_company')->nullable();
            $table->foreign('id_base_company')->references('id')->on('company_insurance_bases')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name')->nullable();
            $table->string('code' , 50)->nullable();
            $table->string('manager')->nullable();
            $table->text('tel')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->string('representative')->nullable();
            $table->string('representative_position')->nullable();
            $table->string('representative_tel', 12)->nullable();
            $table->string('representative_mobile', 12)->nullable();
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
        Schema::dropIfExists('company-insurance-executives');
    }
};
