<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/program-kerja', function () {
    return view('programKerja');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/profil/struktur-organisasi', function () {
    return view('strukturOrganisasi');
});

Route::get('/profil/tentang-kami/logo', function () {
    return view('logo');
});

Route::get('/profil/tentang-kami/sejarah', function () {
    return view('sejarah');
});

Route::get('/profil/tentang-kami/visi&misi', function () {
    return view('visiMisi');
});

Route::get('/profil/tentang-kami/tujuan', function () {
    return view('tujuan');
});