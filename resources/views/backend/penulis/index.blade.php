@extends('backend.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-1">Data Penulis</h6>
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
            <a href="{{ route('backend.create_penulis')}}" class="btn btn-primary">Tambah Penulis</a>
        </div>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Telephone</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse($penulis as $tulis)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tulis->nama}}</td>
                <td>{{ $tulis->alamat}}</td>
                <td>{{ $tulis->tanggal_lahir}}</td>
                <td>{{ $tulis->telphone}}</td>

                <td>
                    <a href="{{ route('backend.edit_penulis', $tulis->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('backend.show_penulis', $tulis->id)}}" class="btn btn-sm btn-info">Show</a>
                    <a href="{{ route('backend.delete_penulis', $tulis->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">
                    Tidak Ada Data Penulis
                </td>
            </tr>
            @endforelse
        </tbody>
        </table>
    </div>
</div>
</div>

@endsection