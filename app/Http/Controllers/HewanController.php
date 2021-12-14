<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HewanController extends Controller
{
    public function index()
    {
        //DB::table('')->get();
        // mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get(); //hasil get() adalah array of object[object][]
        // mengambil data dari table pegawai
		$hewan = DB::table('hewan')->paginate(10);
        // mengirim data pegawai ke view index
        return view('hewan.index', ['hewan' => $hewan]); //teknik komunikasi / passing value antara controller dan view

    }
    // method untuk menampilkan view form tambah pegawai
    public function add()
    {

        // memanggil view tambah
        return view('hewan.add');
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('hewan')->insert([
            'namahewan' => $request->namahewan,
            'jumlahhewan' => $request->jumlahhewan,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/hewan');
    }
    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $hewan = DB::table('hewan')->where('kodehewan', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('hewan.edit', ['hewan' => $hewan]);
    }
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('hewan')->where('kodehewan', $request->id)->update([
            'namahewan' => $request->namahewan,
            'jumlahhewan' => $request->jumlahhewan,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/hewan');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('hewan')->where('kodehewan', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/hewan');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$hewan = DB::table('pegawai')
		->where('namahewan','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('hewan.index',['hewan' => $hewan]);

	}
    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $hewan = DB::table('hewan')->where('kodehewan', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('hewan.detail', ['pegawai' => $hewan]);
    }
}
