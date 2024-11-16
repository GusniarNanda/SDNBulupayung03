<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Services;
use App\Models\Berita;
use App\Models\Portofolio;
use Symfony\Component\HttpKernel\Profiler\Profile;

class HomeController extends Controller
{
    
    public function index()
    {
        $sliders = Slider::all();
        $services = Service::all();
        return view('home.index', compact('sliders' , 'services'));
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
        $portofolios = Portofolio::all();
        return view('home.portofolio', compact('portofolios'));
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
        $services = Service::all();
        return view('home.services', compact('services'));
    }

    public function berita()
    {
        $beritas = Berita::all();
        return view('home.berita', compact('beritas'));
    }

    public function detailberita($id)
    {
    
    $berita = Berita::whereId($id)->firstOrFail();
    return view('home.detailberita', compact('berita'));
    }

}
