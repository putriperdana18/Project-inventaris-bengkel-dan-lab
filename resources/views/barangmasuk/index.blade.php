@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@stop

@section('content')

Halaman Barang Masuk
 <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Barang Masuk
                        <a href="{{ route('barangmasuk.create') }}" class="btn btn-sm btn-outline-primary"
                            style="float: right">Add
                            Barang Masuk</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>ID Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori Barang</th>
                                    <th>Merek</th>
                                    <th>Jumblah Barang</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Kondisi</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($barangmasuks as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->stok->id_barang() }}</td>
                                        <td>{{ $data->stok->nama_barang() }}</td> 
                                        <td>{{ $data->kategori_barang }}</td>
                                        <td>{{ $data->Merek }}</td>
                                        <td>{{ $data->jumlah_barang }}</td>
                                        <td>{{ $data->tgl_masuk }}</td>
                                        <td>{{ $data->kondisi }}</td>
                                        <td>{{ $data->keterangan}}</td>
                                        <td>
                                            <form action="{{ route('barangmasuk.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('barangmasuk.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('barangmasuk.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure?');">Delete</button>
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