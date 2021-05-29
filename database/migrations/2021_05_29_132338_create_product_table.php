<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('name');
            $table->double('price');
            $table->string('image');
            $table->date('tgl_terbit');
            $table->string('penerbit');
            $table->text('deskripsi');
            $table->text('kondisi');
            $table->string('penulis');
            $table->string('upload_bukti');
            $table->string('tgl_upload');
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
        Schema::dropIfExists('product');
    }
}
