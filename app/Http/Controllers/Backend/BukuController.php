<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\auth;

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')
            ->select(
                'buku.*',
                'penulis.nama as nama_penulis',
                'kategori_buku.nama as nama_kategori',
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

    public function store(Request $request)
    {

        $request->validate([
            'kategori_id' => 'required|exists:kategori_buku,id',
            'penulis_id' => 'required|exists:penulis_buku,id',
            'judul' => 'required|string|max:255',
            'rating' => 'required|numeric',
            'sinopsis' => 'required|string',
            'penerbit' => 'required|string|max:255',
            'jumlah_halaman' => 'required|integer',
            'tahggal_terbit' => 'required|date',
            'isbn' => 'required|string|max:20',
            'bahasa' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'kategori_id.required' => 'Kategori Buku harus diisi.',
            'kategori_id.exists' => 'Kategori Buku tidak valid.',
            'penulis_id.required' => 'Penulis harus diisi.',
            'penulis_id.exists' => 'Penulis tidak valid.',
            'judul.required' => 'Judul harus diisi.',
            'judul.max' => 'Judul tidak boleh lebih dari :max karakter.',
            'rating.required' => 'Rating harus diisi.',
            'rating.numeric' => 'Rating harus berupa angka.',
            'sinopsis.required' => 'Sinopsis harus diisi.',
            'penerbit.required' => 'Penerbit harus diisi.',
            'penerbit.max' => 'Penerbit tidak boleh lebih dari :max karakter.',
            'jumlah_halaman.required' => 'Jumlah Halaman harus diisi.',
            'jumlah_halaman.integer' => 'Jumlah Halaman harus berupa angka.',
            'tahggal_terbit.required' => 'Tanggal Terbit harus diisi.',
            'tahggal_terbit.date' => 'Tanggal Terbit harus berupa tanggal.',
            'isbn.required' => 'ISBN harus diisi.',
            'isbn.max' => 'ISBN tidak boleh lebih dari :max karakter.',
            'bahasa.required' => 'Bahasa harus diisi.',
            'bahasa.max' => 'Bahasa tidak boleh lebih dari :max karakter.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Format gambar yang diunggah tidak valid. Gunakan format: :values.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari :max kilobita.',
        ]);

        DB::beginTransaction();

        try {
            // Image handling
            $imageName = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/backend/img'), $imageName);
            }

            // Buku insertion
            $buku = DB::table('buku')->insertGetId([
                'kode_kategori' => $request->kategori_id,
                'judul' => $request->judul,
                'rating' => $request->rating,
                'id_penulis' => $request->penulis_id,
                'created_by' => auth()->user()->id,
                'updated_by' => auth()->user()->id,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);

            // Detail Buku insertion
            DB::table('detail_buku')->insert([
                'sinopsis' => $request->sinopsis,
                'penerbit' => $request->penerbit,
                'image' => $imageName,
                'jumlah_halaman' => $request->jumlah_halaman,
                'tahggal_terbit' => $request->tahggal_terbit,
                'isbn' => $request->isbn,
                'bahasa' => $request->bahasa,
                'id_buku' => $buku,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);

            DB::commit();
            return redirect()->route('backend.buku.index')->with('message', 'Buku Berhasil Diajukan');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
