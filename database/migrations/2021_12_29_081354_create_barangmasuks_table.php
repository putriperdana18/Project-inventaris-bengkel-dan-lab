<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangmasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangmasuks', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('id_barang')->unsigned();
            $table->foreign('id_barang')->references('id')->on('stoks');
            $table->string('nama_barang');
            $table->string('kategori_barang');
            $table->string('Merek');
            $table->integer('jumlah_barang');
            $table->date('tgl_masuk');
            $table->string('kondisi');
            $table->string('keterangan');
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
        Schema::dropIfExists('barangmasuks');
    }
}
