<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMisiController;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/portofolio', [HomeController::class, 'portofolio']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/testimonial', [HomeController::class, 'testimonial']);
Route::get('/berita', [HomeController::class, 'berita']);
Route::get('/berita/{id}', [HomeController::class, 'detailberita'])->name('berita');



//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::as('admin.')->prefix('admin')->group(function () {
    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('sliders', SliderController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('testimonial',TestimonialController::class);
    Route::resource('portofolio',PortofolioController::class);
    Route::resource('clients',ClientController::class);
    Route::resource('teams',TeamController::class);
    Route::resource('kategori',KategoriController::class);

    Route::get('/contact', [ContactController::class, 'index']);
    Route::put('/contact/update/{id}', [ContactController::class, 'update'])->name('contact.update'); 

    Route::resource('berita', BeritaController::class)->names([
    ]);
    Route::get('visimisi/edit', [VisiMisiController::class, 'edit'])->name('visimisi.edit' );
    Route::get('visimisi', [VisiMisiController::class, 'index'])->name('visimisi.index' );
    Route::post('visimisi', [VisiMisiController::class, 'update'])->name('visimisi.update' );
    Route::get('admin/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('beritaedit');
    Route::put('admin/berita/{berita}/update', [BeritaController::class, 'update'])->name('beritaupdate');
    
    
    

   // Route::get('/profile/settings', [Use  rController::class, 'edit'])->name('profile.settings');
   Route::get('profile', [UserController::class, 'index'])->name('profile');

});

