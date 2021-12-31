<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangkeluar extends Model
{
    use HasFactory;
    protected $visible = ['id_barang','jumlah','tgl_keluar','kategori_barang','Merek','kondisi'];
    protected $fillable = ['id_barang','jumlah','tgl_keluar','kategori_barang','Merek','kondisi'];
    public $timestamps = true;
    public function stok()
    {
        return $this->belongsTo('App\Models\Stok', 'id_barang');
    }
}