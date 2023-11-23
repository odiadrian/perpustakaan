@extends('backend.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Tambah Penulis</h6>
        <form method="post" action="{{route('backend-update-peminjam', $datapeminjam->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" value="{{ old('nama',$datapeminjam->nama)}}" name="nama" id="nama">

            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" value="{{ old('alamat',$datapeminjam->alamat)}}" name="alamat" id="alamat">
            </div>
            <div class="mb-3">
                <label for="telphone" class="form-label">Telphone</label>
                <input type="text" class="form-control" value="{{ old('telphone',$datapeminjam->telphone)}}" name="telphone" id="telphone">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" value="{{ old('email',$datapeminjam->email)}}" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control form-control-sm bg-dark" id="image" name="image" accept="image/*">
            </div><br>
            <div class="form-group">
                @if(!empty($datapeminjam->image))
                <img id="image-preview" src="{{ asset('assets/backend/img/' . $datapeminjam->image) }}" class="img-thumbnail" style="width: 150px;">
                @else
                <div class="text-center py-4">No Image</div>
                @endif
            </div><br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('backend-index-Peminjam')}}" class="btn btn-info">Kembali</a>
        </form>
    </div>
</div>
<script>
    // Ambil elemen input file
    var inputImage = document.getElementById('image');

    // Ambil elemen img pratinjau
    var imagePreview = document.getElementById('image-preview');

    // Editkan event listener untuk perubahan pada input file
    inputImage.addEventListener('change', function() {
        // Pastikan ada file yang dipilih
        if (inputImage.files && inputImage.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // Set src gambar pratinjau dengan data URL gambar yang dipilih
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block'; // Tampilkan gambar pratinjau
            }

            // Baca file gambar sebagai data URL
            reader.readAsDataURL(inputImage.files[0]);
        } else {
            // Kosongkan gambar pratinjau jika tidak ada file yang dipilih
            imagePreview.src = '#';
            imagePreview.style.display = 'none'; // Sembunyikan gambar pratinjau
        }
    });
</script>
@endsection