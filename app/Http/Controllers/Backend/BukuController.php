<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        return view('backend.buku.index');
    }

    public function create()
    {
        return view('backend.buku.create');
    }
    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/image/'), $imageName);

        DB::table('detail_buku')->insert([
            'sinopsis' => $request->sinopsis,
            'penerbit' => $request->penerbit,
            'jumlah_halaman' => $request->jumlah_halaman,
            'tahggal_terbit' => $request->tahggal_terbit,
            'isbn' => $request->isbn,
            'bahasa' => $request->bahasa,
            'id_buku' => $request->id_buku,
            'image' => 'assets/image/' . $imageName,

        ]);

        return redirect()->route('')->with('message', 'Jenis Barang Berhasil Disimpan');
    }
    public function update()
    {
        return view('backend.buku.edit');
    }
    public function show($id)
    {
        $detailBuku = DB::table('buku')
            ->select(
                'buku.*', 
                'detail_buku.sinopsis', 
                'detail_buku.penerbit', 
                'detail_buku.image', 
                'detail_buku.jumlah_halaman', 
                'detail_buku.tahggal_terbit', 
                'detail_buku.isbn', 
                'detail_buku.bahasa', 
                'detail_buku.id_buku', 
                )
            ->join('detail_buku', 'buku.id', '=', 'detail_buku.id_buku')
            ->where('buku.id', $id)
            ->first();

        return view('backend.buku.show', compact('detailbuku'));
    }
}
