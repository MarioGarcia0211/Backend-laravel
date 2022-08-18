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
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('status')->default('active');
            $table->integer('amount');
            $table->integer('fkprofiletaqui')->unsigned();
            $table->integer('fkprofileturis')->unsigned();
            $table->timestamps();

            $table->foreign('fkprofiletaqui')->references('id')->on('profiles');
            $table->foreign('fkprofileturis')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
};
