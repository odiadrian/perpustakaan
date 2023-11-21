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
            <div class="mt-4 mb-3">
                <a href="" class="btn btn-primary">Tambah Buku</a>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Novel</td>
                    <td>Matahari Terbenam di Pantai Timur</td>
                    <td>
                        <span class="rating">
                            <i class="fa fa-star star-yellow"></i> 5
                        </span>
                    </td>
                    <td>cahyo anom</td>

                    <td>
                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-info">Show</a> 
                        <a href="" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>

                
            </tbody>
            </table>
        </div>
       
</div>
</div>
 
@endsection