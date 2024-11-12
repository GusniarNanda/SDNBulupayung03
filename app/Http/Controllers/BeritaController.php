<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all();
        return view ('admin.berita.index' , compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.berita.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'required|image',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('gambar')) {
            // Menyimpan gambar di storage/app/public/images
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName); // Gunakan storeAs untuk menyimpan di storage/app/public/images
            $input['gambar'] = $imageName;
        }
    
        Berita::create($input);
    
        return redirect('/admin/berita')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
      
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
    
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|nullable|max:1999',
        ]);
    
        // Update judul dan konten
        $berita->judul = $request->judul;
        $berita->konten = $request->konten;
    
        // Jika ada gambar yang di-upload, proses gambar
        if ($request->hasFile('gambar')) {
            if ($berita->gambar) {
                // Hapus gambar lama
                Storage::delete('public/images/' . $berita->gambar);
            }
            // Simpan gambar baru
            $imageName = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->storeAs('public/images', $imageName);
            $berita->gambar = $imageName;
        }
    
        // Simpan perubahan
        $berita->save();
    
        // Redirect setelah update berhasil
        return redirect()->route('admin.berita.index')->with('message', 'Berita berhasil diperbarui.');
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id); 
    
        $berita->delete(); // Hapus objek model
        return redirect('/admin/berita')->with('message', 'Data Berhasil Dihapus');
    }
    
}
