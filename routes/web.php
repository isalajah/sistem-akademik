<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\jurusanController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\kelasSiswaController;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\userController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\jadwalSiswaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\dataSiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::group(['middleware' => ['auth', 'role:users']], function () {
Route::get('kelasSiswa', [kelasSiswaController::class, 'index'])->name('kelasSiswa.index');
Route::get('users', [userController::class, 'index'])->name('users.index');
Route::get('users/edit/{id}', [userController::class, 'edit'])->name('users.edit');
Route::put('users/update/{id}', [userController::class, 'update'])->name('users.update');
Route::get('jadwalSiswa', [jadwalSiswaController::class, 'index'])->name('jadwalSiswa.index');

});
Route::group(['middleware' => ['auth', 'role:admin']], function () {
//jadwal
Route::get('jadwal', [jadwalController::class, 'index'])->name('jadwal.index');
Route::get('jadwal/create', [jadwalController::class, 'create'])->name('jadwal.create');
Route::post('jadwal', [jadwalController::class, 'store'])->name('jadwal.store');
Route::get('jadwal/edit/{id}', [jadwalController::class, 'edit'])->name('jadwal.edit');
Route::put('jadwal/update/{id}', [jadwalController::class, 'update'])->name('jadwal.update');
Route::delete('jadwal/{id}', [jadwalController::class, 'destroy'])->name('jadwal.destroy');

//mapel
Route::get('mapel', [mapelController::class, 'index'])->name('mapel.index');
Route::get('mapel/create', [mapelController::class, 'create'])->name('mapel.create');
Route::post('mapel', [mapelController::class, 'store'])->name('mapel.store');
Route::get('mapel/edit/{id}', [mapelController::class, 'edit'])->name('mapel.edit');
Route::put('mapel/update/{id}', [mapelController::class, 'update'])->name('mapel.update');
Route::delete('mapel/{id}', [mapelController::class, 'destroy'])->name('mapel.destroy');
//jurusan
Route::get('jurusan', [jurusanController::class, 'index'])->name('jurusan.index');
Route::get('jurusan/create', [jurusanController::class, 'create'])->name('jurusan.create');
Route::post('jurusan', [jurusanController::class, 'store'])->name('jurusan.store');
Route::get('jurusan/edit/{id}', [jurusanController::class, 'edit'])->name('jurusan.edit');
Route::put('jurusan/update/{id}', [jurusanController::class, 'update'])->name('jurusan.update');
Route::delete('jurusan/{id}', [jurusanController::class, 'destroy'])->name('jurusan.destroy');
//siswa
Route::get('siswa', [siswaController::class, 'index'])->name('siswa.index');
Route::get('siswa/create', [siswaController::class, 'create'])->name('siswa.create');
Route::post('siswa', [siswaController::class, 'store'])->name('siswa.store');
Route::get('siswa/edit/{id}', [siswaController::class, 'edit'])->name('siswa.edit');
Route::put('siswa/update/{id}', [siswaController::class, 'update'])->name('siswa.update');
Route::delete('siswa/{id}', [siswaController::class, 'destroy'])->name('siswa.destroy');
//guru
Route::get('guru', [guruController::class, 'index'])->name('guru.index');
Route::get('guru/create', [guruController::class, 'create'])->name('guru.create');
Route::post('guru', [guruController::class, 'store'])->name('guru.store');
Route::get('guru/edit/{id}', [guruController::class, 'edit'])->name('guru.edit');
Route::put('guru/update/{id}', [guruController::class, 'update'])->name('guru.update');
Route::delete('guru/{id}', [guruController::class, 'destroy'])->name('guru.destroy');
//kelas
Route::get('kelas', [kelasController::class, 'index'])->name('kelas.index');
Route::get('kelas/create', [kelasController::class, 'create'])->name('kelas.create');
Route::post('kelas', [kelasController::class, 'store'])->name('kelas.store');
Route::get('kelas/edit/{id}', [kelasController::class, 'edit'])->name('kelas.edit');
Route::put('kelas/update/{id}', [kelasController::class, 'update'])->name('kelas.update');
Route::delete('kelas/{id}', [kelasController::class, 'destroy'])->name('kelas.destroy');
//data siswa
Route::get('dataSiswa', [dataSiswaController::class, 'index'])->name('dataSiswa.index');
});
Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('profile', [profileController::class, 'index'])->name('profile.index');

