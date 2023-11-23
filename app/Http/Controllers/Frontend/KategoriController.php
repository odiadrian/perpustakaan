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

    public function show($slug_kategori)
    {
        $buku = DB::table('buku')
            ->join('kategori_buku', 'kategori_buku.id', 'buku.kode_kategori')
            ->where('slug', $slug_kategori)
            ->get();

        $allCategorys = DB::table('kategori_buku')->select('slug', 'nama')->get();

        return view('frontend.kategori.show', compact('buku', 'allCategorys'));
    }
}
