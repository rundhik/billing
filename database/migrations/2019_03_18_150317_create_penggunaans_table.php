<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunaans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id')->unsigned()->nullable();
            $table->bigInteger('layanan_id')->unsigned()->nullable();
            $table->bigInteger('periode_id')->unsigned()->nullable();
            $table->bigInteger('meter')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('layanan_id')->references('id')->on('layanans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penggunaans');
    }
}
