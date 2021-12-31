@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@stop

@section('content')

Halaman Barang
<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Stok Barang
                        <a href="{{ route('stok.create') }}" class="btn btn-sm btn-info" style="float: right">
                            add Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori Barang</th>
                                    <th>Merek</th>
                                    <th>Stok Asal</th>
                                    <th>Jumblah Barang Masuk</th>
                                    <th>Jumblah Barang Keluar</th>
                                    <th>Jumblah Peminjaman</th>
                                    <th>Jumblah Stok</th>
                                    <th>Action</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($stok as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_barang }}</td>
                                        <td>{{ $data->kategori_barang }}</td>
                                        <td>{{ $data->merek }}</td>
                                        <td>{{ $data->stokasal }}</td>
                                        <td>{{ $data->jumlahbarangmasuk }}</td>
                                        <td>{{ $data->jumblahbarangkeluar }}</td>
                                        <td>{{ $data->peminjaman }}</td>
                                        <td>{{ $data->jumblahstok }}</td>
                                        <td>
                                            <form action="{{ route('stok.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('stok.edit', $data->id) }}"
                                                    class="btn btn-outline-success">Edit</a>
                                                <a href="{{ route('stok.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('are you sure?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
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