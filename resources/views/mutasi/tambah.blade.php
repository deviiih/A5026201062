@extends('layout.bahagia')
@section('title', 'Tambah Mutasi Pegawai')
@section('judulhalaman', 'Tambah Mutasi Pegawai')

@section('konten')

	<h3 style="text-align: center">Tambah Data Mutasi</h3>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		<label for="ID">ID :</label><br>
        <input type="number" name="ID" required="required"> <br/>
		<label for="IDPegawai">IDPegawai :</label><br>
        <input type="number" name="IDPegawai" required="required"> <br/>
		<label for="Departemen">Departemen :</label><br>
        <input type="text" name="Departemen" required="required"> <br/>
		<label for="SubDepartemen">SubDepartemen :</label><br>
        <input type="text" name="SubDepartemen" required="required"><br/>
        <label for="MulaiBertugas">MulaiBertugas :</label><br>
        <input type="datetime-local" name="MulaiBertugas" required="required"><br/><br>
        <div class="row">
            <div class="col-sm-2">
                <input type="submit" role="button" class="btn btn-success" value="Simpan Data">
            </div>
            <div class="col-sm-2">
                <a href="/mutasi" class="btn btn-primary btn-block" role="button" align ="center">Kembali</a>
            </div>
	</form>

    @endsection
