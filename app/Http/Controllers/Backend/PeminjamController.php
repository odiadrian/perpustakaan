<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller; //load post model
use App\Models\Peminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PeminjamController extends Controller
{
    public function index() {
        $peminjam = Peminjam::latest()->paginate(7);
        return view('backend.peminjam.index', compact('peminjam'));
    }
    public function create() {
        return view('backend.peminjam.create');
    }
    public function store(Request $request) {
        // Tipe data $request adalah object

        // DD (die dump untuk memeriksa apakah ada value atau record di dalam variable $request yang diambil dari form inputan)
         // dd($request->all());

        DB::table('peminjam')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telphone' => $request->telphone,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect()->route('backend.peminjam')->with('message', 'Peminjam Berhasil Disimpan');
        
    }
    public function destroy($id) {
        DB::table('peminjam')->where('id', $id)->delete();

        return redirect()->route('backend.peminjam')->with('message', 'Data Peminjam Berhasil Dihapus');
    }
    public function edit($id) {
        // apa tipe data dari $id ? tipe datanya string dengan value integer, example "8"
        // Menggunakan first karena kita mau ngambil data hanya 1 yang sesuai dengan ID

        $editPeminjam =DB::table('peminjam')->where('id', $id)->first();

        return view('backend.peminjam.edit', compact('editPeminjam'));
    }
    public function update(Request $request,$id) {
        DB::table('peminjam')->where('id',$id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telphone' => $request->telphone,
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect()->route('backend.peminjam')->with('message', 'Data Peminjam di Update');      

    }

}

