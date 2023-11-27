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

        <div class="mt-4 mb-3">
            <a href="{{route('backend-create-user')}}" class="btn btn-primary">Tambah User</a>
        </div>
        <tr>
            <th scope="col">No</th>
            <th scope="col">name</th>
            <th scope="col">username</th>
            <th scope="col">email</th>
            <th scope="col">buat pada</th>
            <th scope="col">Aksi</th>

        </tr>
        </thead>
        <tbody>
            {{-- Calculate the row number --}}
            @php
            $rowNumber = ($users->currentPage() - 1) * $users->perPage() + 1;
            @endphp

            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $rowNumber++ }}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$jenis->created_at ?? \Carbon\Carbon::now() }}</td>


                <td>
                    <a href="{{ route('backend-edit-user', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('backend-delete-user', $user->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <div class="float-right">
            {{ $users->links() }}
        </div>
    </div>
</div>
</div>
@endsection