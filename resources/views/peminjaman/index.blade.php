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
                        <a href="{{ route('peminjaman.create') }}" class="btn btn-sm btn-outline-primary"
                            style="float: right">Add
                            Barang Masuk</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Peminjam</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Telepon</th>
                                    <th>Jumblah</th>
                                    <th>Nama Barang</th>
                                    <th>Merek</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Action</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($peminjaman as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->peminjaman }}</td>
                                        <td>{{ $data->jk }}</td>
                                        <td>{{ $data->no_tlp }}</td>
                                        <td>{{ $data->jumlah }}</td>
                                        <td>{{ $data->stok->nama_barang() }}</td> 
                                        <td>{{ $data->Merek }}</td>
                                        <td>{{ $data->tgl_pinjam }}</td>
                                        <td>{{ $data->tgl_kembali }}</td>
                                        <td>{{ $data->keterangan}}</td>
                                        <td>
                                            <form action="{{ route('peminjaman.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('peminjaman.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('peminjaman.show', $data->id) }}"
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