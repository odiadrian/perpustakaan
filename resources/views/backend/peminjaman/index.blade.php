@extends('backend.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-1">Data Peminjaman</h6>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
        </div>
        @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5>
                <i class="icon fas fa-check"></i> Sukses!
            </h5>
            {{ Session('message') }}
        </div>
        @endif

        <div class="mt-4 mb-3">
           
        </div>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal Pengembalian</th>
            <th scope="col">Nama</th>
            <th scope="col">Total Buku</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse($peminjaman as $pinjam)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pinjam->tanggal_pengembalian}}</td>
                <td>{{ $pinjam->nama}}</td>
                <td>{{ $pinjam->total}}</td>
                

                <td>
                    <a href="{{ route('backend.show_penulis', $pinjam->id)}}" class="btn btn-sm btn-info">Show</a>
                    <a href="{{ route('backend.delete_penulis', $pinjam->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">
                    Tidak Ada Data Peminjam
                </td>
            </tr>
            @endforelse
        </tbody>
        </table>
    </div>
</div>
</div>

@endsection