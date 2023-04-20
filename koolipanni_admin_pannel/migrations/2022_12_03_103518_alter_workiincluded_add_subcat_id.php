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
        Schema::table('workincluded',function (Blueprint $table){
            $table->unsignedBigInteger('subcateg_id')->nullable();
            $table->foreign('subcateg_id')->references('id')->on('subcategorymodel')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workincluded',function (Blueprint $table){
            $table->unsignedBigInteger('subcateg_id')->nullable();
            $table->foreign('subcateg_id')->references('id')->on('workincluded')->onUpdate('cascade')->onDelete('cascade');
        });
    }
};
