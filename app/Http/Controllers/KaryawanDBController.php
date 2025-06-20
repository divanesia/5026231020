<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KaryawanDBController extends Controller
{
    public function index(){
    	    // mengambil data dari table karyawan
		    $karyawan = DB::table('karyawan')->get();

    	    // mengirim data pegawai ke view index
		    return view('indexkaryawan',['karyawan' => $karyawan]);

	    }

    public function tambah(){

            // memanggil view tambah
            return view('tambahkaryawan');


        }

    public function store(Request $request){
        // insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman index
        return redirect('karyawan');

        }

        public function hapus($kodepegawai, Request $request)
        {
            DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
            return redirect('/karyawan');
        }


        public function view($kodepegawai){
        // Mengambil data karyawan berdasarkan kodepegawai
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->first();

        // Cek apakah karyawan ditemukan
        if (!$karyawan) {
            abort(404, 'Karyawan tidak ditemukan.'); // Atau redirect dengan pesan error
        }

        // Mengirim data karyawan ke view detail
        return view('viewkaryawan',['karyawan' => $karyawan]);
    }

}
