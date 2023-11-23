<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UsersUpdateRequest;
use Illuminate\Support\Arr;

class UserBackendController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
            ->select(
                'users.*',
            )
            ->orderBy('users.id', 'DESC')
            ->paginate(5);

        return view('backend.user.index', compact('users'));
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi untuk file gambar
        ]);

        // Jika validasi gagal, kembalikan dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/backend/img'), $imageName);
        }

        // Simpan data ke database
        DB::table('users')->insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $imageName,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect()->route('backend-index-user')->with('message', 'Users Berhasil Disimpan!');
    }

    public function edit($id)
    {
        $edituser = DB::table('users')->where('id', $id)->first();

        if (!$edituser) {
            return redirect()->route('backend-index-user')->with('error', 'User tidak ditemukan.');
        }

        return view('backend.user.edit', compact('edituser'));
    }

    public function update(UsersUpdateRequest $request, $id)
    {
        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ];

        if (!empty($request->password)) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }

        if ($request->hasFile('image')) {
            $edituser = DB::table('users')->where('id', $id)->first();
            $oldImageName = $edituser->image;

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/backend/img'), $imageName);

            if ($oldImageName) {
                $oldImagePath = public_path('assets/backend/img') . '/' . $oldImageName;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $data['image'] = $imageName;
        }

        DB::table('users')->where('id', $id)->update($data);

        return redirect()->route('backend-index-user')->with('message', 'User berhasil diperbarui!');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('backend-index-user')->with('message', 'Jenis Barang Berhasil Dihapus!');
    }
}
