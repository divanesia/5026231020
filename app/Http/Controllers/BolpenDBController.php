<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BolpenDBController extends Controller
{
    public function index()
    {
        $bolpen = DB::table('bolpen')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexbolpen',['bolpen' => $bolpen]);
    }



    // method untuk menampilkan view form tambah bolpen
    public function tambah()
    {

        // memanggil view tambah
        return view('tambahbolpen');

    }

    // method untuk insert data ke table bolpen
    public function store(Request $request)
    {
        // insert data ke table bolpen
        DB::table('bolpen')->insert([
            'merkbolpen' => $request->merkbolpen,
            'hargabolpen' => $request->hargabolpen,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman bolpen
        return redirect('/bolpen');

    }


    // method untuk edit data bolpen
    public function edit($id)
    {
        // mengambil data bolpen berdasarkan id yang dipilih
        $bolpen = DB::table('bolpen')
        ->where('id',$id)
        ->get();

        // passing data bolpen yang didapat ke view editbolpen.blade.php
        return view('editbolpen',['bolpen' => $bolpen]);

    }

    // update data bolpen
    public function update(Request $request)
    {
        // update data bolpen
        DB::table('bolpen')->where('id', $request->id)->update([
            'merkbolpen' => $request->merkbolpen,
            'hargabolpen' => $request->hargabolpen,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman bolpen
        return redirect('/bolpen');
    }



    // method untuk hapus data bolpen
    public function hapus($id)
    {
        // menghapus data bolpen berdasarkan id yang dipilih
        DB::table('bolpen')->where('id',$id)->delete();

        // alihkan halaman ke halaman bolpen
        return redirect('/bolpen');
    }



    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table bolpen sesuai pencarian data
        $bolpen = DB::table('bolpen')
        ->where('merkbolpen','like',"%".$cari."%")
        ->paginate();

        // mengirim data bolpen ke view index
        return view('indexbolpen',['bolpen' => $bolpen]);
    }
}
