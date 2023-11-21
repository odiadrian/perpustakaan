<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')
            ->select(
                'buku.*',
                'penulis.nama as nama_penulis',
                'kategori_buku.nama_kategori as nama_kategori',
            )
            ->join('penulis', 'penulis.id', 'buku.id_penulis')
            ->join('kategori_buku', 'kategori_buku.id', 'buku.kode_kategori')
            ->orderBy('buku.id', 'DESC')
            ->paginate(5);
        return view('backend.buku.index', compact('buku'));
    }

    public function create()
    {
        // Mengambil data jenis barang dari tabel _m_s_t__jenis__barang
        $kategoriBuku = DB::table('kategori_buku')->get();
        $penulisBuku = DB::table('penulis')->get();

        // Menghitung jumlah total barang yang ada
        $totalBuku = DB::table('buku')->count();

        return view('backend.buku.create', compact('kategoriBuku', 'penulisBuku', 'totalBuku'));
    }

    public function store()
    {

        return view('backend.buku');
    }
}
