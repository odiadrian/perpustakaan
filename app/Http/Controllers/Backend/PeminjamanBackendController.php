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
                'buku.judul',
                'buku.stok_buku',
                'buku.rating',
                'detail_transaksi.telat_pengembalian',
                'denda_peminjaman_buku.biaya_denda'
            )
            ->join('peminjam', 'transaksi.id_peminjam', '=', 'peminjam.id')
            ->join('detail_transaksi', 'transaksi.id', '=', 'detail_transaksi.id_transaksi')
            ->join('buku', 'detail_transaksi.id_buku', '=', 'buku.id')
            ->join('denda_peminjaman_buku', 'detail_transaksi.id_denda', '=', 'denda_peminjaman_buku.id')
            ->where('transaksi.id', $id)
            ->first();

        if ($detailPeminjaman) {
            return view('detail_peminjaman', compact('detailPeminjaman'));
        } else {
            return redirect()->route('backend.buku')->with('error', 'Data peminjaman tidak ditemukan');
        }
    }
}
