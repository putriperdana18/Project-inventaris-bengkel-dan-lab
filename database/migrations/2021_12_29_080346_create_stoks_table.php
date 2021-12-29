<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('kategori_barang');
            $table->string('merek');
            $table->integer('stokasal');
            $table->integer('jumlahbarangmasuk');
            $table->integer('jumblahbarangleluar');
            $table->integer('peminjaman');
            $table->string('jumblahstok');
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
        Schema::dropIfExists('stoks');
    }
}
