<?php

namespace App\Http\Controllers;
use App\Models\Kategori;

use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }
    public function create()
    {
        return view('kategori.create');
    }

    public function store()
    {
        $data = request()->validate([ 
            'nama' =>'required|min:3|max:50'
        ]);

        Kategori::create($data);

        return redirect(route('admin.kategori.index'))->with('message', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update($id)
    {
        $data = request()->validate([
            'nama' =>'required|min:3|max:50'
        ]);

        Kategori::where('id', $id)->update($data);

        return redirect(route('admin.kategori.index'))->with('message', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        Kategori::destroy($id);
        return redirect(route('admin.kategori.index'))->with('message', 'Data Berhasil Dihapus');
    }
}
