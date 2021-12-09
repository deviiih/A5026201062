@extends('layout.bahagia')
@section('title', 'Edit Pegawai')
@section('judulhalaman', 'Tambah Pegawai')

@section('konten')
<h1 style="text-align: center">Tambah Data Pegawai</h1>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <label for="fname">Nama :</label><br>
		<input type="text" name="nama" required="required"> <br/>
		<label for="jabatan">Jabatan :</label><br>
        <input type="text" name="jabatan" required="required"> <br/>
		<label for="umur">Umur :</label><br>
        <input type="number" name="umur" required="required"> <br/>
		<label for="alamat">Alamat :</label><br>
        <textarea name="alamat" required="required"></textarea> <br/><br>
        <div class="row">
            <div class="col-sm-2">
                <p><input type="submit" class="btn btn-success" value="Simpan Data"></p>
            </div>
            <div class="col-sm-2">
                <a href="/pegawai" class="btn btn-primary btn-block" role="button" align ="center">Kembali</a>
            </div>
	</form>
    @endsection
