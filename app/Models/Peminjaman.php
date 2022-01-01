<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $visible =  ['peminjaman','jk','no_tlp','jumlah',
    'merek','id_barang','tgl_pinjam','tgl_kembali',];
    protected $fillable = ['peminjaman','jk','no_tlp','jumlah',
    'merek','id_barang','tgl_pinjam','tgl_kembali',];
    public $timestamps = true;
    
    public function stok()
    {
        return $this->belongsTo('App\Models\Stok', 'id_barang');
    }

}
