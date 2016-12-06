<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel31sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel31s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun')->unsigned();
            $table->integer('penalaran')->unsigned();
            $table->integer('seni')->unsigned();
            $table->integer('khusus')->unsigned();
            $table->integer('olahraga')->unsigned();
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
        Schema::dropIfExists('tabel31s');
    }
}
