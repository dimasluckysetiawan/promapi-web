<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\FrontPengurusController;
use App\Http\Controllers\AgendaController;

// 1. Beranda utama web (kembali menggunakan tampilan beranda bawaanmu)
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// 2. Halaman khusus daftar berita pengunjung
Route::get('/berita', [FrontController::class, 'index'])->name('berita.public');

// 3. Halaman baca detail artikel
Route::get('/berita/{slug}', [FrontController::class, 'detail'])->name('berita.detail');

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/agenda', function () {
    return view('agenda');
});

// --- HALAMAN PROFIL & TENTANG KAMI ---
Route::get('/profil/tentang-kami/logo', function () {
    return view('logo');
});

Route::get('/profil/tentang-kami/sejarah', function () {
    return view('sejarah');
});

Route::get('/profil/tentang-kami/visi-misi-tujuan', function () {
    return view('visiMisiTujuan');
});

Route::get('/profil/struktur-organisasi', [FrontPengurusController::class, 'index']);

Route::get('/minpro2026', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/minpro2026/berita', BeritaController::class)
    ->parameters(['berita' => 'berita'])
    ->middleware(['auth', 'verified']);

// Rute CRUD Admin untuk Data Pengurus
Route::resource('minpro2026/pengurus', PengurusController::class)->middleware('auth');

Route::resource('minpro2026/agenda', AgendaController::class)->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
