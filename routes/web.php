<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;

//Route::get('/', function () {
//   return view('dashboard');
//});

Route::get('/', [DashboardController::class, 'index']);
//Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
//Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
//Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::resource('mahasiswa', Mahasiswacontroller::class);

Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/prodi/{id}/edit', [ProdiController::class, 'edit'])->name('prodi.edit');
Route::put('/prodi/{id}', [ProdiController::class, 'update'])->name('prodi.update');
Route::delete('/prodi/{id}', [ProdiController::class, 'destroy'])->name('prodi.destroy');
Route::resource('prodi', ProdiController::class);
