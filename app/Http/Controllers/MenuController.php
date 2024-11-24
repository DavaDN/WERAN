<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Hash;
use Session;

class MenuController extends Controller
{
    public function tampilMenu()
    {
        return view('tampilmenu');
    }

    public function tambahMenu()
    {
        return view('tambahmenu');
    }

    public function simpanMenu(Request $request)
    {
        $menu = Menu::insert([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'gambar' => $request->gambar
        ]);

        Session::flash('message', 'Input berhasil, anda sudah menambahkan menu terbaru!');
        return redirect('menu/tambah');
    }
}
