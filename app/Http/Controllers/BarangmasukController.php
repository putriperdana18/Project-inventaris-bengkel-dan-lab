<?php

namespace App\Http\Controllers;

use App\Models\Barangmasuk;
use Illuminate\Http\Request;

class BarangmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barangmasuks = Barangmasuk::with('stok')->get();
        return view('admin.barangmasuk.index', compact('barangmasuks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $stok = Stok::all();
        return view('admin.barangmasuk.create', compact('stok'));
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
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'Merek' => 'required',
            'jumlah_barang' => 'required',
            'tgl_masuk' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
        ]);

        $barangmasuk = new Barangmasuk;
        $barangmasuk->id_barang = $request->id_barang;
        $barangmasuk->jumlah = $request->jumlah;
        $barangmasuk->tgl_masuk = $request->tgl_masuk;
        $barangmasuk->kategori_barang = $request->kategori_barang;
        $barangmasuk->Merek = $request->Merek;
        $barangmasuk->kondisi = $request->kondisi;
        $barangmasuk->keterangan = $request->keterangan;
        $barangmasuk->save();
        return redirect()->route('barangmasuks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $barangmasuk = Barangmasuk::findOrFail($id);
        return view('admin.barangmasuk.show', compact('barangmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Barangmasuk $barangmasuk)
    {
        //
        $barangmasuk = Barangmasuk::findOrFail($id);
        $stok = Stok::all();
        return view('admin.barangmasuk.edit', compact('barangmasuk', 'stok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $request->validate([
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'Merek' => 'required',
            'jumlah_barang' => 'required',
            'tgl_masuk' => 'required',
            'kondisi' => 'required',
        ]);

        $barangmasuk = Barangmasuk::findOrFail($id);
        $barangmasuk->id_barang = $request->id_barang;
        $barangmasuk->jumlah = $request->jumlah;
        $barangmasuk->tgl_masuk = $request->tgl_masuk;
        $barangmasuk->kategori_barang = $request->kategori_barang;
        $barangmasuk->kondisi = $request->kondisi;
        $barangmasuk->keterangan = $request->keterangan;
        $barangmasuk->save();
        return redirect()->route('barangmasuks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barangmasuk = Barangmasuk::findOrFail($id);
        $barangmasuk->delete();
        return redirect()->route('barangmasuks.index');
    }
}
