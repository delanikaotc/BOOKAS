<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePencarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencarian', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('no_transaksi');
            $table->double('total');
            $table->text('ket');
            $table->integer('status');
            $table->dateTime('tgl_confirm');
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
        Schema::dropIfExists('pencarian');
    }
}
