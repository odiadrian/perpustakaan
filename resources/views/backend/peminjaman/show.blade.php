@extends('backend.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h3 class="mb-6">Detail Buku</h3><br>
        <style>
            .dark-input {
                background-color: #252525;
                color: #fff;
                border: 1px solid #555;
            }

            .dark-input:read-only {
                background-color: #252525;
                color: #fff;
                border: 1px solid #555;
            }
        </style>
        <form method="post" action="{{route('backend.show_peminjaman', $detailPeminjaman->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <!-- Foto -->
                    <img src="{{ url('/assets/backend/img/' . $detailPeminjaman->gambar) }}" width="300" alt="">
                </div>

                <div class="col-md-8">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Penulis</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('' $detailPeminjaman->nama)}}" name="nama" id="nama" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">Judul</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('judul' $detailPeminjaman->judul)}}" name="judul" id="judul" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">Rating</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('rating' $detailPeminjaman->rating)}}" name="rating" id="rating" readonly></td>
                            </tr>
                            <tr>
                                <th for="stok_buku">Stok</<th>
                                <td><input type="number" class="form-control dark-input" value="{{ old('rating' $detailPeminjaman->stok_buku)}}" name="stok_buku" id="stok_buku" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('nama' $detailPeminjaman->nama)}}" name="nama" id="nama" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('alamat' $detailPeminjaman->alamat)}}" name="alamat" id="alamat" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">Telephone</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('telphone' $detailPeminjaman->telphone)}}" name="telphone" id="telphone" readonly></td>
                            </tr>
                            <th scope="row">Tanggal Pinjam</th>
                            <td><input type="text" class="form-control dark-input" value="{{ old('tanggal_pinjam' $detailPeminjaman->tanggal_pinjam)}}" name="tanggal_pinjam" id="tanggal_pinjam" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Kembali</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('tanggal_kembali' $detailPeminjaman->tanggal_kembali)}}" name="tanggal_kembali" id="tanggal_kembali" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">Total</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('total' $detailPeminjaman->total)}}" name="total" id="total" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">peminjam</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('id_peminjam' $detailPeminjaman->id_peminjam)}}" name="id_peminjam" id="id_peminjam" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">Buku</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('id_buku' $detailPeminjaman->id_buku)}}" name="id_buku" id="id_buku" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">Telat Pengembalian</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('telat_pengembalian' $detailPeminjaman->telat_pengembalian)}}" name="telat_pengembalian" id="telat_pengembalian" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">Biaya Denda</th>
                                <td><input type="text" class="form-control dark-input" value="{{ old('biaya_denda' $detailPeminjaman->biaya_denda)}}" name="biaya_denda" id="biaya_denda" readonly></td>
                            </tr>

                        </tbody>
                    </table>
                    <a href="{{ route('backend-index-transaksi')}}" class="btn btn-info">Kembali</a>
        </form>
    </div>
</div>
</div>
</div>
@endsection