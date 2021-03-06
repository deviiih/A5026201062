<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MutasiController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        //$mutasi = DB::table('mutasi')->get();
        $mutasi = DB::table('mutasi')
        ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('mutasi.*', 'pegawai.pegawai_nama')
        ->paginate(3);


        // mengirim data pegawai ke view index
        return view('mutasi.index', ['mutasi' => $mutasi]);
    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('mutasi.tambah');
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('mutasi')->insert([
            'ID' => $request->ID,
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->Departemen,
            'SubDepartemen' => $request->SubDepartemen,
            'MulaiBertugas' => $request->MulaiBertugas
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mutasi');
    }
    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $mutasi = DB::table('mutasi')->where('ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('mutasi.edit', ['mutasi' => $mutasi]);
    }
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('mutasi')->where('ID', $request->id)->update([
            'ID' => $request->ID,
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->Departemen,
            'SubDepartemen' => $request->SubDepartemen,
            'MulaiBertugas' => $request->MulaiBertugas
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mutasi');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('mutasi')->where('ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/mutasi');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mutasi = DB::table('mutasi')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('mutasi.index',['mutasi' => $mutasi]);

	}
    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $mutasi = DB::table('mutasi')->where('IDPegawai', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('mutasi.detail', ['mutasi' => $mutasi]);
    }
}
