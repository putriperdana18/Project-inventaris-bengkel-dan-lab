<?php

namespace App\Http\Controllers;

use App\Models\Barangkeluar;
use App\Models\Stok;
use Illuminate\Http\Request;

class BarangkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barangkeluars = Barangkeluar::with('stok')->get();
        return view('admin.barangkeluar.index', compact('barangkeluars'));
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
        return view('admin.barangkeluar.create', compact('stok'));
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
            'jumlah' => 'required',
            'tgl_keluar' => 'required',
            'kategori_barang' => 'required',
            'Merek' => 'required',
            'kondisi' => 'required',
        ]);

        $barangkeluar = new Barangkeluar;
        $barangkeluar->id_barang = $request->id_barang;
        $barangkeluar->jumlah = $request->jumlah;
        $barangkeluar->tgl_keluar = $request->tgl_keluar;
        $barangkeluar->kategori_barang = $request->kategori_barang;
        $barangkeluar->Merek = $request->Merek;
        $barangkeluar->kondisi = $request->kondisi;
        $barangkeluar->save();
        return redirect()->route('barangkeluars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $barangkeluar = Barangkeluar::findOrFail($id);
        return view('admin.barangkeluar.show', compact('barangkeluar'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $barangkeluar = Barangkeluar::findOrFail($id);
        $stok = Stok::all();
        return view('admin.barangkeluar.edit', compact('barangkeluar', 'stok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'id_barang' => 'required',
            'jumlah' => 'required',
            'tgl_keluar' => 'required',
            'kategori_barang' => 'required',
            'Merek' => 'required',
            'kondisi' => 'required',
        ]);

        $barangkeluar = Barangkeluar::findOrFail($id);
        $barangkeluar->id_barang = $request->id_barang;
        $barangkeluar->jumlah = $request->jumlah;
        $barangkeluar->tgl_keluar = $request->tgl_keluar;
        $barangkeluar->kategori_barang = $request->kategori_barang;
        $barangkeluar->kondisi = $request->kondisi;
        $barangkeluar->save();
        return redirect()->route('barangkeluars.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barangkeluar = Barangkeluar::findOrFail($id);
        $barangkeluar->delete();
        return redirect()->route('barangkeluars.index');
    }
}
