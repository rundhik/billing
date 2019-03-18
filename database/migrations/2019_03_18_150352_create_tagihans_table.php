<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('penggunaan_id')->unsigned()->nullable();
            $table->string('tagihan_kode', 100)->nullable();
            $table->bigInteger('tagihan');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('penggunaan_id')->references('id')->on('penggunaans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagihans');
    }
}
