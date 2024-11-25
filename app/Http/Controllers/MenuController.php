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
        $menu = Menu::select('*')->get();
        
        return view('tampilMenu', ['menu' => $menu]);
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

    public function ubahmenu($id)

    {
        $menu = Menu::select('*')
        ->where('id', $id)->get();

        return view('ubahmenu', ['menu' => $menu]);
    }

    public function updatemenu(Request $request)

    {
        $menu = Menu::where('id', $request->id)->update([
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'harga' => $request->harga,
                'gambar' => $request->gambar,]);

        return redirect()->route('tampilmenu');
    }

    public function hapusmenu($id)

    {

        $menu = Menu::where('id', $id)->delete();

        return redirect()->route('tampilmenu');
    }
}
