@extends('layout.bahagia')
@section('title', 'Edit Mutasi')
@section('judulhalaman', 'Daftar Mutasi Pegawai')

@section('konten')
	<h3 style="text-align: center">Edit Mutasi Pegawai</h3>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
		<label for="ID">ID :</label><br>
        <input type="number" required="required" name="ID" value="{{ $m->ID }}"> <br/><br>
		<label for="IDPegawai">IDPegawai :</label><br>
        <input type="number" required="required" name="IDPegawai" value="{{ $m->IDPegawai }}"> <br/><br>
		<label for="Departemen">Departemen :</label><br>
        <input type="text" required="required" name="Departemen" value="{{ $m->Departemen }}"> <br/><br>
		<label for="SubDepartemen">SubDepartemen :</label><br>
        <input type="text" required="required" name="SubDepartemen" value="{{ $m->SubDepartemen }}"> <br/><br>
		<label for="MulaiBertugas">MulaiBertugas :</label><br>
        <input type="datetime-local" required="required" name="MulaiBertugas" value="{{ $m->MulaiBertugas }}"> <br/><br>
	</form><br>
    <div class="row">
        <div class="col-sm-2 vertical-center">
            <p><input type="submit" class="btn btn-success" value="Simpan Data" style="align-content: center"></p>
        </div>
        <div class="col-sm-2 vertical-center">
            <a href="/mutasi" class="btn btn-primary btn-danger" role="button" style="align-content: center">Kembali</a>
        </div>
	@endforeach

    @endsection
