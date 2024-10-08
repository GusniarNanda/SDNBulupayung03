<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
    
        return view('testimonial.index',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonial.create');
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
            'title'=> 'required','description' => 'required','image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) 
        {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath,$imageName);
            $input['image'] = $imageName;
        }

        Testimonial::create($input);

        return redirect('/admin/testimonial')->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $Testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $Testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $Testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $Testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'title'=> 'required','description' => 'required','image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath,$imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $testimonial->update($input);

        return redirect('/admin/testimonial')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $Testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $Testimonial)
    {
        $Testimonial->delete();
        return redirect('/admin/testimonial')->with('message','Data Berhasil Dihapus');
    }
}
