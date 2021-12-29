<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->string('peminjam');
            $table->string('jk');
            $table->string('no_tlp');
            $table->integer('jumlah');
            $table->BigInteger('id_barang')->unsigned();
            $table->string('Merek');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->foreign('id_barang')->references('id')->on('stoks');
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
        Schema::dropIfExists('peminjamen');
    }
}
