@extends('layout.bahagia')
@section('title', 'Tambah Nilai Mahasiswa')
@section('judulhalaman', 'Tambah Nilai Mahasiswa')

@section('konten')

	<h3 style="text-align: center">Tambah Nilai Mahasiswa</h3>
	<br/>

	<form action="/nilaikuis/store" method="post">
		{{ csrf_field() }}
		<label for="ID">ID :</label><br>
        <input type="text" name="ID" required="required"> <br/>
		<label for="NRP">NRP :</label><br>
        <input type="text" name="NRP" required="required"> <br/>
		<label for="NilaiAngka">NilaiAngka :</label><br>
        <input type="text" name="NilaiAngka" required="required"> <br/>
		<label for="SKS">SKS :</label><br>
        <input type="text" name="SKS" required="required"><br/>
            <div class="col-sm-2">
                <input type="submit" value="Simpan Data" class="btn btn-primary btn-block" role="button" align ="center">
                <a href="/nilaikuliah" value="Simpan Data" class="btn btn-primary btn-block" role="button" align ="center">Simpan Data</a>
            </div>
	</form>

    @endsection
