<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanDBController extends Controller
{
    public function index(){
    	    // mengambil data dari table mykaryawan
		    $mykaryawan = DB::table('mykaryawan')->get();

    	    // mengirim data pegawai ke view index
		    return view('indexmykaryawan',['mykaryawan' => $mykaryawan]);

    }

        // method untuk edit data mykaryawan
    public function edit($kodepegawai)
    {
        // mengambil data mykaryawan berdasarkan id yang dipilih
        $mykaryawan = DB::table('mykaryawan')
        ->where('kodepegawai',$kodepegawai)
        ->get();

        // passing data mykaryawan yang didapat ke view editmykaryawan.blade.php
        return view('editmykaryawan',['mykaryawan' => $mykaryawan]);

    }

    // update data mykaryawan
    public function update(Request $request)
    {
        // update data mykaryawan
        DB::table('mykaryawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);
        // alihkan halaman ke halaman mykaryawan
        return redirect('/eas');
    }


        public function view($kodepegawai){
        // Mengambil data karyawan berdasarkan kodepegawai
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();

        // Cek apakah karyawan ditemukan
        if (!$mykaryawan) {
            abort(404, 'Karyawan tidak ditemukan.'); // Atau redirect dengan pesan error
        }

        // Mengirim data mykaryawan ke view detail
        return view('viewmykaryawan',['mykaryawan' => $mykaryawan]);
    }

}
