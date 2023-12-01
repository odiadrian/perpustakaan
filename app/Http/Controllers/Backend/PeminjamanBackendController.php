<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanBackendController extends Controller
{
    public function index()
    {
        $peminjaman = DB::table('transaksi')
            ->select(
                'transaksi.*',
                'peminjam.nama'
            )
            ->join('peminjam', 'peminjam.id', 'transaksi.id_peminjam')
            ->orderBy('transaksi.id', 'DESC')
            ->paginate(5);

        return view('backend.peminjaman.index', compact('peminjaman'));
    }

    public function show($id)
    {
        $detailPeminjaman = DB::table('transaksi')
            ->select(
                'transaksi.*',
                'peminjam.nama as nama_peminjam',
                'peminjam.alamat',
                'peminjam.telphone',
                'buku.judul',
                'buku.stok_buku',
                'buku.rating',
                'detail_transakasi.denda',
                'detail_transakasi.telat_pengembalian',
                'detail_buku.image as image_buku',
                'detail_buku.sinopsis',
                'detail_buku.penerbit',
                'detail_buku.jumlah_halaman',
                'detail_buku.isbn',
                'detail_buku.bahasa'
            )
            ->join('peminjam', 'transaksi.id_peminjam', '=', 'peminjam.id')
            ->join('detail_transakasi', 'transaksi.id', '=', 'detail_transakasi.id_transaksi')
            ->join('buku', 'detail_transakasi.id_buku', '=', 'buku.id')
            ->join('detail_buku', 'buku.id', '=', 'detail_buku.id_buku')
            ->where('transaksi.id', $id)
            ->first();
    
        if ($detailPeminjaman) {
            return view('backend.peminjaman.show', compact('detailPeminjaman'));
        } else {
            return redirect()->route('backend-index-transaksi')->with('error', 'Data peminjaman tidak ditemukan');
        }
    }
    public function destroy($id)
    {
        DB::table('transaksi')->where('id', $id)->delete();

        return redirect()->route('backend-index-transaksi')->with('message', 'transaksi Berhasil Dihapus');
    }
    
}
