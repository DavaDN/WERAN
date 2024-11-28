<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\Hash;
use Session;

class KategoriController extends Controller
{
    public function tampilkategori()
    {
        $kategori = Kategori::select('*')->get();
        
        return view('tampilkategori', ['kategori' => $kategori]);
    }

    public function tambahkategori()
    {
        return view('tambahkategori');
    }

    public function simpankategori(Request $request)
    {
        $kategori = Kategori::insert([
            'name' => $request->name
        ]);

        Session::flash('message', 'Input berhasil, anda sudah menambahkan kategori terbaru!');
        return redirect('kategori/tampil');
    }

    public function ubahkategori($id)

    {
        $kategori = Kategori::select('*')
        ->where('id', $id)->get();

        return view('ubahkategori', ['kategori' => $kategori]);
    }

    public function updatekategori(Request $request)

    {
        $kategori = Kategori::where('id', $request->id)->update([
                'name' => $request->name,]);

        return redirect()->route('tampilkategori');
    }

    public function hapuskategori($id)
    {
        $kategori = Kategori::where('id', $id)->delete();

        return redirect()->route('tampilkategori');
    }
}