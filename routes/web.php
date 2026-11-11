<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/berita', function () {
    return view('berita');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/program-kerja', function () {
    return view('programKerja');
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

Route::get('/profil/struktur-organisasi', function () {
    return view('strukturOrganisasi');
});

Route::get('/minpro2026', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/minpro2026/berita', BeritaController::class)
    ->parameters(['berita' => 'berita'])
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
