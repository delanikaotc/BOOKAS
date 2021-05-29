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
            $table->integer('id_user')->nullable();
            $table->string('name')->nullable();
            $table->double('price')->nullable();
            $table->string('image')->nullable();
            $table->date('tgl_terbit')->nullable();
            $table->string('penerbit')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('kondisi')->nullable();
            $table->string('penulis')->nullable();
            $table->string('upload_bukti')->nullable();
            $table->string('tgl_upload')->nullable();
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
