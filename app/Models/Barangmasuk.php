<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangmasuk extends Model
{
    use HasFactory;
    protected $visible= ['id_barang','nama_barang','kategori_barang',
    'Merek','jumlah_barang','tgl_masuk','kondisi','keterangan', ];
    protected $fillable = ['id_barang','nama_barang','kategori_barang',
    'Merek','jumlah_barang','tgl_masuk','kondisi','keterangan', ];
    public $timestamps = true;
    public function stok()
    {
        return $this->belongsTo('App\Models\Stok', 'id_barang');
    }
}
