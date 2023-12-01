@extends('backend.app')
@section('title', 'Kategori Buku')
@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Data Kategori</h6>
            @can('kategori-create')
            <a href="{{route('backend.tambah.kategori')}}" class="btn btn-sm btn-block btn-success">Tambah Kategori</a>
            @endcan
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori as $kat)
                        <tr>
                            <th scope="row">{{$kategori->firstItem() + $loop->index}}</th>
                            <td>{{ $kat->nama }}</td>
                            <td>{{ $kat->keterangan }}</td>
                            <td>{{ $kat->slug }}</td>
                            <td>
                                @can('kategori-edit')
                                <a href=" {{ route('edit_kategori', $kat->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                @endcan
                                @can('kategori-delete')
                                <a href=" {{ route('delete_kategori', $kat->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Hapus</a>
                                @endcan
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Blank End -->
@endsection