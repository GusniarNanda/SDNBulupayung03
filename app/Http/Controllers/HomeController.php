<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Slider;

class HomeController extends Controller
{
    
    public function index()
    {
        $sliders = Slider::all();
        return view('home.index', compact('sliders'));
    }
    
    public function about()
    {
        return view('home.about');
    }

    public function team()
    {
        $teams = Team::all();
        return view('home.team', compact('teams'));
    }

    public function portofolio()
    {
        return view('home.portofolio');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function testimonial()
    {
        return view('home.testimonials');
    }

    public function services()
    {
        return view('home.services');
    }
}
