<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kontakController extends Controller
{
    public function index()
    {
        return view('frontend.kontak.index');
    }
    public function store(Request $request) {

        DB::table('messages')->insert([
            'name' => $request->name,
            'pesan' => $request->message,
            'email' => $request->email,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        return redirect()->route('frontend.kontak')->with('message', 'Pesan Terkirim ');
}
}