@extends('adminlte::page')

@section('title', 'dashboard')

@section('content_header')

<h2><br></h2>

@stop

@section('content')
<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">edit Stok</div>
                    <div class="card-body">
                        <form action="{{ route('stok.update', $stok->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <input type="text" name="nama_barang" value="{{ $stok->nama_barang }}"
                                    class="form-control
                                    @error('nama_barang') is-invalid @enderror">

                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Kategori Barang</label>
                                <input type="text" name="kategori_barang" value="{{ $stok->kategori_barang }}"
                                    class="form-control
                                    @error('kategori_barang') is-invalid @enderror">

                                @error('kategori_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Merek</label>
                                <input type="text" name="merek" value="{{ $stok->merek }}"
                                    class="form-control
                                    @error('merek') is-invalid @enderror">

                                @error('merek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Stok Asal</label>
                                <input type="text" name="stokasal" value="{{ $stok->stokasal }}"
                                    class="form-control
                                    @error('stokasal') is-invalid @enderror">

                                @error('stokasal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumblah Barang Masuk</label>
                                <input type="text" name="jumlahbarangmasuk" value="{{ $stok->jumlahbarangmasuk }}"
                                    class="form-control
                                    @error('jumlahbarangmasuk') is-invalid @enderror">

                                @error('jumlahbarangmasuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumblah Barang Keluar</label>
                                <input type="text" name="jumblahbarangkeluar" value="{{ $stok->jumblahbarangkeluar }}"
                                    class="form-control
                                    @error('jumblahbarangkeluar') is-invalid @enderror">

                                @error('jumblahbarangkeluar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Peminjaman</label>
                                <input type="text" name="peminjaman" value="{{ $stok->peminjaman }}"
                                    class="form-control
                                    @error('peminjaman') is-invalid @enderror">

                                @error('peminjaman')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumblah Stok</label>
                                <input type="text" name="jumblahstok" value="{{ $stok->jumblahstok }}"
                                    class="form-control
                                    @error('jumblahstok') is-invalid @enderror">

                                @error('jumblahstok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <br>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop