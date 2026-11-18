<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\WalikelasController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('index');
})->name('index');
Route::get('/bukutamu', function () {
    return view('admin/bukutamu');
})->name('bukutamu');
Route::get('/dokumentasi', function () {
    return view('dokumentasi');
})->name('dokumentasi');
Route::get('/siswa', function () {
    return view('siswa');
})->name('siswa');
Route::get('/datadiri', function () {
    return view('datadiri');
})->name('datadiri');
Route::get('/biodata', function () {
    return view('biodata');
})->name('biodata');
Route::get('/', function () {
    return view('admin/home');
})->name('home');
Route::get('/tamu/daftar', [PengunjungController::class, 'publicForm'])->name('tamu.create');
Route::post('/tamu/daftar', [PengunjungController::class, 'storePublic'])
    ->middleware('throttle:10,1')
    ->name('tamu.store');

Route::resource('jurusan', JurusanController::class);
Route::resource('guru', GuruController::class);
Route::resource('kelas', KelasController::class);
Route::resource('walikelas', WalikelasController::class);
Route::resource('pengunjung', PengunjungController::class)->except(['show']);
Route::resource('pegawai', PegawaiController::class)->except(['show']);
Route::resource('kunjungan', KunjunganController::class)->except(['show']);
