<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->select('id', 'nama')->get();
        return view('frontend.kategori.index', compact('kategori'));
    }

    public function show($slug_kategori)
    {
        $buku = DB::table('buku')
            ->join('kategori', 'kategori.id', 'buku.kategori_id')
            ->where('slug', $slug_kategori)
            ->get();

        return view('frontend.kategori.show');
    }
}
