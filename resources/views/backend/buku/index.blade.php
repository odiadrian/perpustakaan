@extends('backend.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-1">Data Buku</h6>
        <div class="table-responsive">
            <table class="table table-bordered">
                <style>
                    .star-yellow {
                        color: gold;
                    }
                </style>
                <thead>
        </div>
        @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5>
                <i class="icon fas fa-check"></i> Sukses!
            </h5>
            {{ Session('message')}}
        </div>
        @endif


        @if(Session::has('error'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5>
                <i class="icon fas fa-check"></i> Error!
            </h5>
            {{ Session('error')}}
        </div>
        @endif
        <div class="mt-4 mb-3">
            <a href="{{route('backend-buku-create')}}" class="btn btn-primary">Tambah Buku</a>
        </div>
        <tr>
            <th scope="col">No</th>
            <th scope="col">kategori</th>
            <th scope="col">Judul</th>
            <th scope="col">Rating</th>
            <th scope="col">Penulis</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            {{-- Calculate the row number --}}
            @php
            $rowNumber = ($buku->currentPage() - 1) * $buku->perPage() + 1;
            @endphp

            @foreach($buku as $book)
            <tr>
                <th scope=" row">{{ $rowNumber++ }}</th>
                <td>{{$book->nama_kategori}}</td>
                <td>{{$book->judul}}</td>
                <td>
                    <span class="rating">
                        <i class="fa fa-star star-yellow"></i> 5
                    </span>
                </td>
                <td>{{$book->nama_penulis}}</td>

                <td>
                    <a href="{{ route('backend.edit_buku', $book->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('backend.show_buku', $book->id)}}" class="btn btn-sm btn-info">Show</a>
                    <a href="{{ route('backend.delete_buku', $book->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>

                @if($buku->isEmpty())
                <p class="text-center">Tidak Ada Data Buku</p>
                @endif

                <div class="float-right">
                    {{ $buku->links() }}
                </div>
        </div>
       
</div>
</div>
 
@endsection