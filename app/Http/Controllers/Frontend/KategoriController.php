<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori_buku')->select('id', 'nama', 'slug')->get();
        return view('frontend.kategori.index', compact('kategori'));
    }

    // BukuController.php
public function show($slug_kategori)
{
    $buku = DB::table('buku')
        ->select('penulis.nama as nama_penulis', 'detail_buku.*', 'kategori_buku.nama', 'buku.created_at')
        ->join('kategori_buku', 'kategori_buku.id', 'buku.kode_kategori')
        ->join('detail_buku', 'detail_buku.id_buku', 'buku.id')
        ->join('penulis', 'penulis.id', 'buku.id_penulis')
        ->where('slug', $slug_kategori)
        ->get();

    $allCategorys = DB::table('kategori_buku')->select('slug', 'nama')->get();

    return view('frontend.kategori.show', compact('buku', 'allCategorys'));
}

public function showBuku($id)
{
    $bukudetail = DB::table('buku')
        ->select('buku.*', 'detail_buku.*', 'penulis.nama as nama_penulis', 'kategori_buku.nama', 'buku.created_at')
        ->join('kategori_buku', 'kategori_buku.id', 'buku.kode_kategori')
        ->join('detail_buku', 'detail_buku.id_buku', 'buku.id')
        ->join('penulis', 'penulis.id', 'buku.id_penulis')
        ->where('buku.id', $id)
        ->first();

    if ($bukudetail) {
        return view('frontend.buku.show', compact('bukudetail'));
    } else {
        return view('frontend.buku.show');
    }
}

}
