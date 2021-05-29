<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi');
            $table->integer('id_pembeli');
            $table->integer('id_penjual');
            $table->integer('id_product');
            $table->string('nama_penjual');
            $table->string('nama_pembeli');
            $table->string('name');
            $table->double('price');
            $table->double('qty');
            $table->string('image');
            $table->date('tgl_terbit');
            $table->string('penerbit');
            $table->text('deskripsi');
            $table->text('kondisi');
            $table->string('penulis');
            $table->integer('status');
            $table->text('foto_bukti');
            $table->dateTime('tgl_bukti');
            $table->dateTime('tgl_confirm_admin');
            $table->dateTime('tgl_confirm_pengirimann');
            $table->dateTime('tgl_confirm_selesai');
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
        Schema::dropIfExists('order');
    }
}
