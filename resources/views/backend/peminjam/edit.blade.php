@extends('backend.app')

@section('content')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route('update_peminjam', $editPeminjam->id) }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" value="{{ $editPeminjam->nama }}" id="nama" name="nama" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" value="{{ $editPeminjam->alamat }}" id="alamat" name="alamat" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="telphone">Telphone</label>
                            <input type="text" class="form-control" value="{{ $editPeminjam->telphone }}" id="telphone" name="telphone" placeholder="">
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan Peminjam</button>
                            <a href="{{ route('backend.peminjam') }}" class="btn btn-info">Kembali</a>

                        </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection