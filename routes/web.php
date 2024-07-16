<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('landing-page.index');
});

Route::get('/visimisi', function () {
    return view('landing-page.visimisi');
});

Route::get('/organisasi', function () {
    return view('landing-page.organisasi');
});

Route::get('/ppdb', function () {
    return view('landing-page.ppdb');
});

Route::get('/galeri', function () {
    return view('landing-page.galeri');
});

Route::get('/berita',[BeritaController::class, 'index'])->name('beritas.index');


