<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('pert1', function () {
	return view('pert1intro');
});

Route::get('pert2a', function () {
	return view('pert2news');
});

Route::get('pert2b', function () {
	return view('pert2news1');
});

Route::get('pert3a', function () {
	return view('pert3responsive');
});

Route::get('pert3b', function () {
	return view('pert3template');
});

Route::get('pert3c', function () {
	return view('pert3tugas');
});

Route::get('pert4', function () {
	return view('pert4-5026241176');
});

Route::get('pert5linktree', function () {
	return view('pert5linktree');
});

Route::get('home', function () {
	return view('home');
});


Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

