<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel142sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel142s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fakultas');
            $table->integer('usul');
            $table->integer('kontrak');
            $table->integer('s1');
            $table->integer('s2');
            $table->integer('s3');
            $table->integer('mhs');
            $table->integer('dana');
            $table->integer('tahun');
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
        Schema::dropIfExists('tabel142s');
    }
}
