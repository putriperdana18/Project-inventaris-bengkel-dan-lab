<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $peminjamans = Peminjaman::with('stok')->get();
        return view('admin.peminjaman.index', compact('peminjamans'));
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
        return view('admin.peminjaman.create', compact('stok'));
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
            'peminjam' => 'required',
            'jk' => 'required',
            'no_tlp' => 'required',
            'jumlah' => 'required',
            'id_barang' => 'required',
            'Merek' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $peminjaman = new Peminjaman;
        $peminjaman->peminjam = $request->peminjam;
        $peminjaman->jk = $request->jk;
        $peminjaman->no_tlp = $request->no_tlp;
        $peminjaman->jumlah = $request->jumlah;
        $peminjaman->Merek = $request->Merek;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->save();
        return redirect()->route('peminjamans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $peminjaman = Peminjaman::findOrFail($id);
        return view('admin.peminjaman.show', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $peminjaman = Peminjaman::findOrFail($id);
        $stok = Stok::all();
        return view('admin.peminjaman.edit', compact('peminjaman', 'stok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'peminjam' => 'required',
            'jk' => 'required',
            'no_tlp' => 'required',
            'jumlah' => 'required',
            'id_barang' => 'required',
            'Merek' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $peminjaman = new Peminjaman;
        $peminjaman->peminjam = $request->peminjam;
        $peminjaman->jk = $request->jk;
        $peminjaman->no_tlp = $request->no_tlp;
        $peminjaman->jumlah = $request->jumlah;
        $peminjaman->Merek = $request->Merek;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->save();
        return redirect()->route('peminjamans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjamans.index');
    }
}
