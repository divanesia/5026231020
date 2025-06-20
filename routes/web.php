<?php

// use di php sama kayak import di java
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BolpenDBController;
use App\Http\Controllers\KeranjangBelanjaDBController;
use App\Http\Controllers\CounterDBController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\MyKaryawanDBController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// kurleb sama kayak System.out.println()
// di java kan pake . nah kalo di php pake nya ::
Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Coba:: class, 'helloworld']);





// file perkuliahan pertemuan 1 - ETS
// pertemuan 1
Route::get('htmlintro', function () {
	return view('htmlintro');
});

// tugas pertemuan 1
Route::get('centering_images_css', function () {
	return view('centering_images_css');
});

Route::get('height_width_css', function () {
	return view('height_width_css');
});

// pertemuan 2
Route::get('cssintro', function () {
	return view('cssintro');
});

// pertemuan 3
Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('bootstrap2', function () {
	return view('bootstrap2');
});

// tugas pertemuan 4
Route::get('latihan_kodesoal1', function () {
	return view('latihan_kodesoal1');
});

// tugas pertemuan 5
Route::get('tugas_linktree', function () {
	return view('tugas_linktree');
});

// pertemuan 7
Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

// ETS
Route::get('index', function () {
	return view('index');
});


Route::get('frontend', function () {
	return view('frontend');
});


Route::get('dosen', [Coba:: class, 'index']);
// Route::get('/pegawai/{nama}', [PegawaiController:: class, 'index']);

Route::get('/formulir', [PegawaiController:: class, 'formulir']); //halaman isian formulir
Route::post('/formulir/proses', [PegawaiController:: class, 'proses']); //action form

//route blog
Route::get('/blog', [BlogController:: class, 'home']);
Route::get('/blog/tentang', [BlogController:: class, 'tentang']);
Route::get('/blog/kontak', [BlogController:: class, 'kontak']);


// CRUD pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);

Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController:: class, 'store']);

Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController:: class, 'update']);

Route::get('/pegawai/hapus/{id}', [PegawaiDBController:: class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController:: class, 'cari']);


//CRUD bolpen
Route::get('/bolpen', [BolpenDBController::class, 'index']);

Route::get('/bolpen/tambah', [BolpenDBController::class, 'tambah']);
Route::post('/bolpen/store', [BolpenDBController:: class, 'store']);

Route::get('/bolpen/edit/{id}', [BolpenDBController::class, 'edit']);
Route::post('/bolpen/update', [BolpenDBController:: class, 'update']);

Route::get('/bolpen/hapus/{id}', [BolpenDBController:: class, 'hapus']);

Route::get('/bolpen/cari', [BolpenDBController:: class, 'cari']);


//Latihan 1 EAS CRUD
Route::get('/keranjangbelanja', [KeranjangBelanjaDBController::class, 'index']);

Route::get('/keranjangbelanja/beli', [KeranjangBelanjaDBController::class, 'beli']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaDBController:: class, 'store']);

Route::get('/keranjangbelanja/batal/{ID}', [KeranjangBelanjaDBController:: class, 'batal']);


//Latihan 2 EAS CRUD
Route::get('/counter',[CounterDBController::class, 'index']);


//Latihan 3 EAS CRUD
Route::get('/karyawan', [KaryawanDBController:: class, 'index']);

Route::get('/karyawan/tambah', [KaryawanDBController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanDBController::class, 'store']);

Route::delete('/karyawan/hapus/{kodepegawai}', [KaryawanDBController::class, 'hapus']);


// eas
Route::get('/eas', [MyKaryawanDBController:: class, 'index']);
Route::get('/eas/edit/{kodepegawai}', [MyKaryawanDBController::class, 'edit']);
Route::post('/eas/update', [MyKaryawanDBController:: class, 'update']);
Route::get('/eas/view/{kodepegawai}', [MyKaryawanDBController::class, 'view']);
