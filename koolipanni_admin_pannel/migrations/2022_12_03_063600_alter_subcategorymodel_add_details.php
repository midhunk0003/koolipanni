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
            $table->text('subcat_description')->nullable();
            $table->text('work_details')->nullable();
            $table->string('included_details')->nullable();
            $table->string('general_starting_price')->nullable();
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
            $table->dropColumn('subcat_description')->nullable();
            $table->dropColumn('work_details')->nullable();
            $table->dropColumn('included_details')->nullable();
            $table->dropColumn('general_starting_price')->nullable();
        });
    }
};
