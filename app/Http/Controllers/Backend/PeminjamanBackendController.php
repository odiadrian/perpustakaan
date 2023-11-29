<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanBackendController extends Controller
{
    public function index()
    {
        $peminjaman = DB::table('transaksi')
            ->select(
                'transaksi.*','peminjam.nama'
            )
            ->join('peminjam', 'peminjam.id', 'transaksi.id_peminjam')
            ->orderBy('transaksi.id', 'DESC')
            ->paginate(5);

        return view('backend.peminjaman.index', compact('peminjaman'));
    }
}
