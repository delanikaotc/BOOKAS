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
            $table->string('no_transaksi')->nullable();
            $table->integer('id_pembeli')->nullable();
            $table->integer('id_penjual')->nullable();
            $table->integer('id_product')->nullable();
            $table->string('nama_penjual')->nullable();
            $table->string('nama_pembeli')->nullable();
            $table->string('name')->nullable();
            $table->double('price')->nullable();
            $table->double('qty')->nullable();
            $table->string('image')->nullable();
            $table->date('tgl_terbit')->nullable();
            $table->string('penerbit')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('kondisi')->nullable();
            $table->string('penulis')->nullable();
            $table->integer('status')->nullable();
            $table->text('foto_bukti')->nullable();
            $table->dateTime('tgl_bukti')->nullable();
            $table->dateTime('tgl_confirm_admin')->nullable();
            $table->dateTime('tgl_confirm_pengiriman')->nullable();
            $table->dateTime('tgl_confirm_selesai')->nullable();
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
