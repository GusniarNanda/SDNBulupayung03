<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolios = Portofolio::with ('kategori')->get();
    
        return view('portofolio.index',compact('portofolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Kategori::all();
        return view('portofolio.create', compact('categories'));
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
            'title'=> 'required','description' => 'required','image' => 'required|image', 'category_id' => 'required|exists:categories,id'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) 
        {
            $destinationPath = 'public/images/';
            $imageName = rand() . $image->getClientOriginalName();
            $image->storeAs($destinationPath,$imageName);
            $input['image'] = $imageName;
        }

        Portofolio::create($input);

        return redirect('/admin/portofolio')->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(portofolio $portofolio)
    {
        $categories = Kategori::all();
        return view('portofolio.edit',compact('portofolio','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, portofolio $portofolio)
    {
        $request->validate([
            'title'=> 'required','description' => 'required','image' => 'image','category_id' => 'required|exists:categories,id'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) 
        {
            $destinationPath = 'public/images/';
            $imageName = $image->getClientOriginalName();
            $image->storeAs($destinationPath,$imageName);
            $input['image'] = $imageName;
        }
        else {
            unset($input['image']);
        }

        $portofolio->update($input);

        return redirect('/admin/portofolio')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(portofolio $portofolio)
    {
        $portofolio->delete();
        return redirect('/admin/portofolio')->with('message','Data Berhasil Dihapus');
    }
}
