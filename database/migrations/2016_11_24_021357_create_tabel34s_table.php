<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel34sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel34s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pt');
            $table->integer('tahun')->unsigned();
            $table->integer('emas')->unsigned();
            $table->integer('perak')->unsigned();
            $table->integer('perunggu')->unsigned();
            $table->integer('h1')->unsigned();
            $table->integer('h2')->unsigned();
            $table->integer('h3')->unsigned();
            $table->integer('fav')->unsigned();
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
        Schema::dropIfExists('tabel34s');
    }
}
