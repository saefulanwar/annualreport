<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel23sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel23s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tahun');
            $table->integer('luas_total');
            $table->integer('sertifikat');
            $table->integer('luas_sertifikat');
            $table->integer('jumlah_lokasi');
            $table->integer('luas_lokasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel23s');
    }
}
