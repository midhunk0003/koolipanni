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
        Schema::table('users',function (Blueprint $table){
            $table->string('pincode')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->string('latitude')->nullable();
            $table->string('loungnitude')->nullable();
            $table->string('userregisternumber')->nullable();
            $table->string('phonenumber')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function (Blueprint $table){
            $table->dropColumn('pincode')->nullable();
            $table->dropColumn('state')->nullable();
            $table->dropColumn('city')->nullable();
            $table->dropColumn('location')->nullable();
            $table->dropColumn('country')->nullable();
            $table->dropColumn('latitude')->nullable();
            $table->dropColumn('loungnitude')->nullable();
            $table->dropColumn('userregisternumber')->nullable();
            $table->dropColumn('phonenumber')->nullable();

        });
    }
};
