<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMabaregsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mabaregs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun')->unsigned();
            $table->integer('d3')->unsigned();
            $table->integer('s1')->unsigned();
            $table->integer('s2')->unsigned();
            $table->integer('s3')->unsigned();
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
        Schema::dropIfExists('mabaregs');
    }
}
