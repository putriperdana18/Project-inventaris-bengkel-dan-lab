@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@stop

@section('content')

Halaman Barang Keluar
 <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Barang Keluar
                        <a href="{{ route('barangkeluar.create') }}" class="btn btn-sm btn-outline-primary"
                            style="float: right">Add
                            Barang Keluar</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Barang</th>
                                    <th>Jumblah</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Kategori Barang</th>
                                    <th>Merek</th>
                                    <th>kondisi</th>
                                    <th>Action</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($barangkeluar as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->stok->nama_barang }}</td>
                                        <td>{{ $data->jumlah }}</td>
                                        <td>{{ $data->tgl_keluar }}</td>
                                        <td>{{ $data->kategori_barang }}</td>
                                        <td>{{ $data->Merek }}</td>
                                        <td>{{ $data->kondisi }}</td>
                                        <td>
                                            <form action="{{ route('barangkeluar.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('barangkeluar.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('barangkeluar.show', $data->id) }}"
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