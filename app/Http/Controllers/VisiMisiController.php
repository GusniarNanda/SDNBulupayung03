<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visimisi = VisiMisi::first();
        return view('visimisi.index', compact('visimisi'));
    }

    public function edit()
    {
        $visimisi = VisiMisi::first();
        return view('visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request)
    {
        $visimisi = VisiMisi::query()->update(['visi'=> $request->visi,'misi'=> $request->misi]);
        return redirect()->route('admin.visimisi.index')->with('message', 'Data Berhasil Ditambahkan');
    }
}
