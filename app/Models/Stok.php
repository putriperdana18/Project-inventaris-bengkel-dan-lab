<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang','kategori_barang', 'merek', 'stokasal', 
    'jumlahbarangmasuk', 'jumblahbarantgkeluar', 'peminjaman', 'jumblahstok'];
    public $timestamps = true;

     public function barangkeluar()
    {
        return $this->hasMany('App\Models\Barangkeluar', 'id_barang');
    }
}
