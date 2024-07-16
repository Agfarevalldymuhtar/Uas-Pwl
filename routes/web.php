<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// route awal sebelum donwload admminLTE //

// Route::get('/', function () {
//     return view('landing-page.index');
// });

// Route::get('/visimisi', function () {
//     return view('landing-page.visimisi');
// });

// Route::get('/organisasi', function () {
//     return view('landing-page.organisasi');
// });

// Route::get('/ppdb', function () {
//     return view('landing-page.ppdb');
// });

// Route::get('/berita', function () {
//     return view('beritas.berita');
// });

// Route::get('/galeri', function () {
//     return view('landing-page.galeri');
// });

