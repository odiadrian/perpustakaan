<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller; //load post model
use App\Models\Konfigurasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\KonfigurasiRequest;

class KonfigurasiController extends Controller
{
    public function index() {
        $konfigurasi = Konfigurasi::latest()->paginate(7);
        return view('backend.konfigurasi.index', compact('konfigurasi'));
    }
    public function create() {
        return view('backend.konfigurasi.create');
    }
    public function store(KonfigurasiRequest $request) {
        // Tipe data $request adalah object

        // DD (die dump untuk memeriksa apakah ada value atau record di dalam variable $request yang diambil dari form inputan)
         // dd($request->all());

        DB::table('konfigurasi')->insert([
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'maps' => $request->maps,
            'logo_perpus' => $request->logo_perpus,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect()->route('backend-index-konfigurasi')->with('message', 'Konfigurasi Berhasil Disimpan');
        
    }
    public function destroy($id) {
        DB::table('konfigurasi')->where('id', $id)->delete();

        return redirect()->route('backend-index-konfigurasi')->with('message', 'Data Konfigurasi Berhasil Dihapus');
    }
    public function edit($id) {
        // apa tipe data dari $id ? tipe datanya string dengan value integer, example "8"
        // Menggunakan first karena kita mau ngambil data hanya 1 yang sesuai dengan ID

        $editKonfigurasi =DB::table('konfigurasi')->where('id', $id)->first();

        return view('backend.konfigurasi.edit', compact('editKonfigurasi'));
    }
    public function update(KonfigurasiRequest $request,$id) {
        DB::table('konfigurasi')->where('id',$id)->update([
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'maps' => $request->maps,
            'logo_perpus' => $request->logo_perpus,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect()->route('backend-index-konfigurasi')->with('message', 'Data Konfigurasi di Update');      

    }

}
