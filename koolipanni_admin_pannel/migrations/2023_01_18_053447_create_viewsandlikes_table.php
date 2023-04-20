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
        Schema::create('viewsandlikes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('category')->onUpdate('cascade')->onDelete('cascade');;
            $table->unsignedBigInteger('worker_details_id')->nullable();
            $table->foreign('worker_details_id')->references('id')->on('worker_details')->onUpdate('cascade')->onDelete('cascade');
            $table->string('user_id')->nullable();
            $table->string('status')->default(0);
            $table->string('views')->default(0);
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
        Schema::dropIfExists('viewsandlikes');
    }
};
