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
            $table->integer('id_user')->nullable();
            $table->string('no_transaksi')->nullable();
            $table->double('total')->nullable();
            $table->text('ket')->nullable();
            $table->integer('status')->nullable();
            $table->dateTime('tgl_confirm')->nullable();
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
