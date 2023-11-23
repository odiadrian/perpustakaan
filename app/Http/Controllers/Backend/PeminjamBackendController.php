<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PeminjamBackendController extends Controller
{
    public function index(){
        $peminjam = DB::table('peminjam')->paginate(5);

        return view('backend.peminjam.index', compact('peminjam'));
    }
    public function create()
    {
        return view('backend.peminjam.create');
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/backend/img'), $imageName);
        }

        try {
            // Create a new user
            $user = User::insertGetId([
                'name' => $request->nama,
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'image' => $imageName, // Make sure the image storage is configured properly
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Create a new penulis related to the user
            DB::table('peminjam')->insertGetId([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'telphone' => $request->telphone,
                'user_id' => $user, // Assign the user_id
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::commit();

            return redirect()->route('backend-index-Peminjam')->with('message', 'Data peminjam Berhasil Disimpan');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('backend-index-Peminjam')->with('error', 'Gagal menyimpan data: ' . $e->getMessage())->withErrors($e->getMessage());
        }
    }
    public function edit($id)
    {
        $datapeminjam = DB::table('peminjam')
        ->select('peminjam.*', 'users.image', 'users.email')
        ->join('users', 'peminjam.user_id', '=', 'users.id')
        ->where('peminjam.id', $id)
        ->first();

        if (!$datapeminjam) {
            return redirect()->route('backend-index-Peminjam')->with('error', 'Data peminjam tidak ditemukan');
        }

        return view('backend.peminjam.edit', compact('datapeminjam'));
    }
}
