<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel35sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel35s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fakultas');
            $table->string('nama');
            $table->string('jenjang');
            $table->string('peringkat');
            $table->integer('tahun')->unsigned();
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
        Schema::dropIfExists('tabel35s');
    }
}
