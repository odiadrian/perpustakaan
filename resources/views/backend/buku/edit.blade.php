@extends('backend.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Tambah Buku</h6>
        <form>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" value="{{ old('kategori')}}" id="kategori">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" value="{{ old('judul')}}" id="judul">
            </div>
            <div class="mb-3">
                <label for="sinopsis" class="form-label">Sinopsis</label>
                <input type="text" class="form-control" value="{{ old('sinopsis')}}" id="sinopsis">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" value="{{ old('penerbit')}}" id="penerbit">
            </div>
            <div class="mb-3">
                <label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
                <input type="text" class="form-control" value="{{ old('jumlah_halaman')}}" id="jumlah_halaman">
            </div>
            <div class="mb-3">
                <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
                <input type="text" class="form-control" value="{{ old('tanggal_terbit')}}" id="tanggal_terbit">
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">Isbn</label>
                <input type="text" class="form-control" value="{{ old('isbn')}}" id="isbn">
            </div>
            <div class="mb-3">
                <label for="bahasa" class="form-label">Bahasa</label>
                <input type="text" class="form-control" value="{{ old('bahasa')}}" id="bahasa">
            </div>
            <div class="mb-3">
                <label for="id_buku" class="form-label">Id Buku</label>
                <input type="text" class="form-control" value="{{ old('id_buku')}}" id="id_buku">
            </div>
            <div class="mb-3">
                <label for="kode_kategori" class="form-label">Kode Kategori</label>
                <input type="text" class="form-control" value="{{ old('kode_kategori')}}" id="kode_kategori">
            </div>
            <div class="mb-3">
                <label for="id_penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" value="{{ old('id_penulis')}}" id="id_penulis">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input class="form-control bg-dark" type="file" value="{{ old('image')}}" id="image">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('backend.buku')}}" class="btn btn-info">Kembali</a>
        </form>
    </div>
</div>

@endsection