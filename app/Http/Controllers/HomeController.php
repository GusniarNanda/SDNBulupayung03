<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Slider;
use App\Models\Testimonial;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
        $testimonials = Testimonial::all();
        return view('home.testimonials', compact('testimonials'));
    }

    public function services()
    {
        return view('home.services');
    }

}
