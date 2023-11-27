@extends('backend.app')

@section('content')

<div class="container-fluid pt-4 px-4">
<div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Data Peminjam</h6>
                            <a href="{{route('backend.tambah.peminjam')}}" class="btn btn-sm btn-block btn-success">Tambah Peminjam</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Telphone</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($peminjam as $pem)
                                        <tr>
                                            <th scope="row">{{$peminjam->firstItem() + $loop->index}}</th>
                                            <td>{{ $pem->nama }}</td>
                                            <td>{{ $pem->alamat }}</td>
                                            <td>{{ $pem->telphone }}</td>
                                            <td>
                                                <a href=" {{ route('edit_peminjam', $pem->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href=" {{ route('delete_peminjam', $pem->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                           
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>
@endsection