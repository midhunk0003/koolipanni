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
        Schema::table('subcategorymodel',function (Blueprint $table){
           $table->string('duration')->nullable();
           $table->string('Turnaround Time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subcategorymodel',function (Blueprint $table){
            $table->dropColumn('duration')->nullable();
            $table->dropColumn('Turnaround Time')->nullable();
        });
    }
};
