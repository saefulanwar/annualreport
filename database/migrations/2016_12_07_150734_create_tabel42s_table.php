<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel42sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel42s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pelaksana_kegiatan');
            $table->string('nama');
            $table->string('tamu');
            $table->string('negara');
            $table->string('tanggal_pelaksanaan');
            $table->string('peserta');
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
        Schema::dropIfExists('tabel42s');
    }
}
