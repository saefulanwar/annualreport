<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel19sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel19s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun');
            $table->integer('d3');
            $table->integer('s1');
            $table->integer('s2');
            $table->integer('s3');
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
        Schema::dropIfExists('tabel19s');
    }
}
