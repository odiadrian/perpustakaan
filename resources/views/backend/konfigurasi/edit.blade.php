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

                <form method="POST" action="{{ route('update_konfigurasi', $editKonfigurasi->id) }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" value="{{ $editKonfigurasi->email }}" id="email" name="email" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="no_telepon">Nomor Telphone</label>
                            <input type="text" class="form-control" value="{{ $editKonfigurasi->no_telepon }}" id="no_telepon" name="no_telepon" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" value="{{ $editKonfigurasi->alamat }}" id="alamat" name="alamat" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="maps">Maps</label>
                            <input type="text" class="form-control" value="{{ $editKonfigurasi->maps }}" id="maps" name="maps" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="logo_perpus">Logo Perpus</label>
                            <input type="text" class="form-control" value="{{ $editKonfigurasi->logo_perpus }}" id="logo_perpus" name="logo_perpus" placeholder="">
                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan Konfigurasi</button>
                            <a href="{{ route('backend-index-konfigurasi') }}" class="btn btn-info">Kembali</a>

                        </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection