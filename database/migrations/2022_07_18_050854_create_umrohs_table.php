<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmrohsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umrohs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('biaya');
            $table->string('durasi');
            $table->string('hotel');
            $table->string('keberangkatan');
            $table->string('maskapai');
            $table->string('img');
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
        Schema::dropIfExists('umrohs');
    }
}
