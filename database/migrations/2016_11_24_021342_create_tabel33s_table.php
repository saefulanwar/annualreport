<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel33sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel33s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fakultas');
            $table->integer('tahun')->unsigned();
            $table->integer('pkmk')->unsigned();
            $table->integer('pkmkc')->unsigned();
            $table->integer('pkmm')->unsigned();
            $table->integer('pkmp')->unsigned();
            $table->integer('pkmt')->unsigned();
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
        Schema::dropIfExists('tabel33s');
    }
}
