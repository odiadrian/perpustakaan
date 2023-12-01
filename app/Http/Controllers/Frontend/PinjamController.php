<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_buku)
    {
        // Logika atau pemrosesan lainnya untuk halaman peminjaman
        return view('frontend.pinjaman.index', compact('id_buku')); // Sesuaikan dengan struktur direktori Anda
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getIdPeminjam = DB::table('peminjam')->select('id')->where('user_id', Auth::user()->id)->first();

        // counter rating setiap ada peminjaman
        DB::table('buku')->where('id', $request->id_buku)->increment('rating');

        DB::table('buku')->where('id', $request->id_buku)->decrement('stok_buku', (int) $request->total_buku);

        $id_transaksi = DB::table('transaksi')->insertGetId([
            'tanggal_pinjam' => $request->tgl_peminjaman,
            'tanggal_kembali' => $request->tgl_pengembalian,
            'total' => $request->total_buku,
            'status' => 0,
            'id_peminjam' => $getIdPeminjam->id,
            'created_by' => Auth::user()->id ?? 1,
            'updated_by' => Auth::user()->id ?? 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('detail_transakasi')->insert([
            'id_buku' => $request->id_buku,
            'telat_pengembalian' => 0,
            'denda' => 0,
            'id_transaksi' => $id_transaksi,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('frontend.list.pinjaman', Auth::user()->id);
    }

    /**;
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_user)
    {
        // dd($id_user);
        if (Auth::check()) {
            $detail_transaksi = DB::table('detail_transakasi')
            ->where('transaksi.created_by', $id_user)
            ->select('detail_transakasi.id','detail_transakasi.created_at', 'buku', 'judul',  'telat_pengembalian','denda','id_transaksi')
            ->join('transaksi', 'transaksi.id', 'detail_transakasi.id_transaksi')
            ->join('buku', 'buku.id', 'detail_transakasi.buku')
            // ->join('users', 'users.id', 'peminjam.user_id')
            ->paginate(10);
    
            return view ('frontend.pinjaman.listpinjaman', compact('detail_transaksi'));
        } else {
            return "Login Dulu gehh";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
