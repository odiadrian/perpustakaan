@extends('backend.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"><br>
                    <h2>Tambah Buku</h2>
                </div>
                <style>
                    /* Gaya untuk dark mode */
                    @media (prefers-color-scheme: dark) {
                        input[type="date"] {
                            background-color: #333;
                            color: #fff;
                        }
                    }
                </style>
            </div>
        </div>
    </section>

    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <form method="POST" action="{{route('backend-buku-store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="kategori">Kategori Buku</label>
                        <select class="form-select form-select-sm mt-2" id="kategori_id" name="kategori_id">
                            <option value="{{ old('kategori_id') }}" disabled selected>---Pilih Kategori Buku---</option>
                            @foreach($kategoriBuku as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="peulis">Penulis</label>
                        <select class="form-select form-select-sm mt-2" id="penulis_id" name="penulis_id">
                            <option value="{{ old('penulis_id') }}" disabled selected>---Pilih penulis---</option>
                            @foreach($penulisBuku as $penulis)
                            <option value="{{ $penulis->id }}">{{ $penulis->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control mt-2" value="{{ old('judul') }}" id="judul" name="judul" placeholder="">
                    </div>

                    <div class="form-group mb-4">
                        <label for="rating">Rating</label>
                        <input type="text" class="form-control mt-2" value="{{ old('rating') }}" id="rating" name="rating" placeholder="">
                    </div>

                    <div class="form-group mb-4">
                        <label for="sinopsis">sinopsis</label>
                        <textarea class="form-control mt-2" id="sinopsis" name="sinopsis" placeholder="">{{ old('sinopsis') }}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" name="penerbit" value="{{ old('penerbit') }}" id="penerbit" class="form-control mt-2" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="jumlah_halaman">Jumlah Halaman</label>
                        <input type="number" name="jumlah_halaman" value="{{ old('jumlah_halaman') }}" id="jumlah_halaman" class="form-control mt-2" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="tahggal_terbit">Tanggal Terbit</label>
                        <span>
                            <input type="date" name="tahggal_terbit" value="{{ old('tahggal_terbit') }}" id="tahggal_terbit" class="form-control fa fa-chart-date " required></i>
                        </span>
                    </div>
                    <div class="form-group mb-4">
                        <label for="isbn">ISBN</label>
                        <input type="text" name="isbn" value="{{ old('isbn') }}" id="isbn" class="form-control mt-2" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="bahasa">Bahasa</label>
                        <input type="text" name="bahasa" value="{{ old('bahasa') }}" id="bahasa" class="form-control mt-2" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Masukkan Foto</label>
                        <input class="form-control mt-2 form-control-sm bg-dark" id="image" name="image" accept="image/*" type="file">
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('backend.buku')}}" class="btn btn-info">kembali</a>


                </form>
            </div>
        </div>

    </div>
</div>
@endsection