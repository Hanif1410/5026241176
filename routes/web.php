<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\TehController;
use App\Http\Controllers\NilaiKuliahController;

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

Route::get('menu', function () {
	return view('menu');
});


Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/tambah', [KeranjangBelanjaController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang/store', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/batal/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjang.destroy');

Route::get('/teh', [TehController::class, 'index'])->name('teh.index');
Route::get('/teh/tambah', [TehController::class, 'create'])->name('teh.create');
Route::post('/teh/store', [TehController::class, 'store'])->name('teh.store');
Route::delete('/teh/batal/{id}', [TehController::class, 'destroy'])->name('teh.destroy');
Route::get('/teh/edit/{kodeteh}', [TehController::class, 'edit'])->name('teh.edit');
Route::put('/teh/update/{kodeteh}', [TehController::class, 'update'])->name('teh.update');

Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');
Route::delete('/nilaikuliah/batal/{id}', [NilaiKuliahController::class, 'destroy'])->name('nilaikuliah.destroy');
Route::get('/nilaikuliah/edit/{id}', [NilaiKuliahController::class, 'edit'])->name('nilaikuliah.edit');
