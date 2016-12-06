<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel188sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel188s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun');
            $table->integer('target');
            $table->integer('capaian');
            $table->integer('guladarah');
            $table->integer('kolesterol');
            $table->integer('asamurat');
            $table->integer('goldarah');
            $table->integer('hb');
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
        Schema::dropIfExists('tabel188s');
    }
}
