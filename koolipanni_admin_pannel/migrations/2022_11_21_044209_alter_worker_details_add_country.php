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
        Schema::table('worker_details', function (Blueprint $table) {
             $table->string('country')->nullable();
             $table->string('latitude')->nullable();
             $table->string('loungnitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('worker_details', function (Blueprint $table) {
            $table->dropColumn('country')->nullable();
            $table->dropColumn('latitude')->nullable();
            $table->dropColumn('loungnitude')->nullable();
        });
    }
};
