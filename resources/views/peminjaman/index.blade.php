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
                        Peminjaman Barang
                        <a href="{{ route('peminjaman.create') }}" class="btn btn-sm btn-info" style="float: right">
                            add Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Peminjam</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Telepon</th>
                                    <th>Jumblah</th>
                                    <th>Nama Barang</th>
                                    <th>Merek</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>JTanggal Kembali</th>
                                    <th>Action</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($peminjaman as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->peminjam }}</td>
                                        <td>{{ $data->jk }}</td>
                                        <td>{{ $data->no_tlp }}</td>
                                        <td>{{ $data->jumlah }}</td>
                                        <td>{{ $data->stok->nama_barang }}</td>
                                        <td>{{ $data->Merek }}</td>
                                        <td>{{ $data->tgl_pinjam }}</td>
                                        <td>{{ $data->tgl_kembali }}</td>
                                        <td>
                                            <form action="{{ route('peminjaman.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('peminjaman.edit', $data->id) }}"
                                                    class="btn btn-outline-success">Edit</a>
                                                <a href="{{ route('peminjaman.show', $data->id) }}"
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