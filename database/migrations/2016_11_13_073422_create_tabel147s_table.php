<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel147sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel147s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
                $table->string('jurusan');
                $table->string('fakultas');
                $table->string('jenis_hki');
                $table->string('no_hki');
                $table->string('tahun');
                $table->string('judul_hki');
                $table->string('asal_penelitian');

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
        Schema::dropIfExists('tabel147s');
    }
}
