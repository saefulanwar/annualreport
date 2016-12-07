<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel44sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel44s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pelaksana_kegiatan');
            $table->string('guest_lecture');
            $table->string('asal');
            $table->string('tanggal_pelaksanaan');
            $table->string('materi');
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
        Schema::dropIfExists('tabel44s');
    }
}
