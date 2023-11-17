<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller; //load post model
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    public function index() {
        $kategori = Kategori::latest()->get();
        return view('backend.kategori.index', compact('kategori'));
    }
    public function create() {
        return view('backend.kategori.create');
    }
    public function store(Request $request) {
        // Tipe data $request adalah object

        // DD (die dump untuk memeriksa apakah ada value atau record di dalam variable $request yang diambil dari form inputan)
         // dd($request->all());

        DB::table('kategori')->insert([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'slug' => $request->nama,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect()->route('backend.kategori')->with('message', 'Kategori Berhasil Disimpan');
        
    }
    public function destroy($id) {
        DB::table('kategori')->where('id', $id)->delete();

        return redirect()->route('backend.kategori')->with('message', 'Data Barang Berhasil Dihapus');
    }
    public function edit($id) {
        // apa tipe data dari $id ? tipe datanya string dengan value integer, example "8"
        // Menggunakan first karena kita mau ngambil data hanya 1 yang sesuai dengan ID

        $editKategori =DB::table('kategori')->where('id', $id)->first();

        return view('backend.kategori.edit', compact('editKategori'));
    }
    public function update(Request $request,$id) {
        DB::table('kategori')->where('id',$id)->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect()->route('backend.kategori')->with('message', 'Data Kategori di Update');      

    }

}
