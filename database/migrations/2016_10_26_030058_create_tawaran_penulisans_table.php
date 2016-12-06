<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTawaranPenulisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tawaran_penulisans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun')->unsigned();
            $table->integer('jumlah')->unsigned();
            $table->integer('dana')->unsigned();
            $table->integer('peminat')->unsigned();
            $table->integer('didanai')->unsigned();
            $table->integer('terselesaikan')->unsigned();
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
        Schema::dropIfExists('tawaran_penulisans');
    }
}
