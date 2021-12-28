<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['nm_kategori'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->nm_kategori;
    }

    public function barang()
    {
        return $this->hasMany('App\Models\Barang', 'id_kategori');
    }
}
