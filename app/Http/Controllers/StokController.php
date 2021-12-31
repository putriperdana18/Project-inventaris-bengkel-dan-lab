<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $stok = Stok::all();
        return view('stok.index', compact('stok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('stok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'merek' => 'required',
            'stokasal' => 'required',
            'jumlahbarangmasuk',
            'jumblahbarangkeluar',
            'peminjaman',
            'jumblahstok' => 'required',
        ]);

        $stok = new Stok;
        $stok->nama_barang = $request->nama_barang;
        $stok->kategori_barang = $request->kategori_barang;
        $stok->merek = $request->merek;
        $stok->stokasal = $request->stokasal;
        $stok->jumlahbarangmasuk = $request->jumlahbarangmasuk;
        $stok->jumblahbarangkeluar = $request->jumblahbarangkeluar;
        $stok->peminjaman = $request->peminjaman;
        $stok->jumblahstok = $request->jumblahstok;
        $stok->save();
        return redirect()->route('stok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $stok = Stok::findOrFail($id);
        return view('stok.edit', compact('stok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $stok = Stok::findOrFail($id);
        return view('stok.edit', compact('stok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'merek' => 'required',
            'stokasal',
            'jumlahbarangmasuk',
            'jumblahbarangkeluar',
            'peminjaman',
            'jumblahstok' => 'required',
        ]);

        $stok =Stok::findOrFail($id);
        $stok->nama_barang = $request->nama_barang;
        $stok->kategori_barang = $request->kategori_barang;
        $stok->merek = $request->merek;
        $stok->stokasal = $request->stokasal;
        $stok->jumlahbarangmasuk = $request->jumlahbarangmasuk;
        $stok->jumblahbarangkeluar = $request->jumblahbarangkeluar;
        $stok->peminjaman = $request->peminjaman;
        $stok->jumblahstok = $request->jumblahstok;
        $stok->save();
        return redirect()->route('stok.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $stok = Stok::findOrFail($id);
        $stok->delete();
        return redirect()->route('stok.index');
    }
}
