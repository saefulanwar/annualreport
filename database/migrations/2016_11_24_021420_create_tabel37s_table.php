<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel37sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel37s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fakultas');
            $table->string('nama_beasiswa');
            $table->integer('tahun')->unsigned();
            $table->integer('jumlah')->unsigned();
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
        Schema::dropIfExists('tabel37s');
    }
}
