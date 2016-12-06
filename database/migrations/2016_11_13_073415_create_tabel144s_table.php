<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabel144sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel144s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fakultas');
            $table->integer('gasal');
            $table->integer('genap');
            $table->integer('khusus');
            $table->integer('ppkhb');
            $table->string('ta');
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
        Schema::dropIfExists('tabel144s');
    }
}
