<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel187sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel187s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun');
            $table->integer('target');
            $table->integer('capaian');
            $table->integer('mhs');
            $table->integer('kary');
            $table->integer('dosen');
            $table->integer('umum');
            $table->integer('dana');
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
        Schema::dropIfExists('tabel187s');
    }
}
