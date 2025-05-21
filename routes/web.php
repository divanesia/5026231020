<?php

// use di php sama kayak import di java
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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
Route::get('/pegawai/{nama}', [PegawaiController:: class, 'index']);

Route::get('/formulir', [PegawaiController:: class, 'formulir']); //halaman isian formulir
Route::post('/formulir/proses', [PegawaiController:: class, 'proses']); //action form

//route blog
Route::get('/blog', [BlogController:: class, 'home']);
Route::get('/blog/tentang', [BlogController:: class, 'tentang']);
Route::get('/blog/kontak', [BlogController:: class, 'kontak']);
