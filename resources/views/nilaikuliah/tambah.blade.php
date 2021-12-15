@extends('layout.bahagia')
@section('title', 'Tambah Nilai Mahasiswa')
@section('judulhalaman', 'Tambah Nilai Mahasiswa')

@section('konten')

	<h3 style="text-align: center">Tambah Nilai Mahasiswa</h3>
	<br/>

	<form action="/nilaikuis/store" method="post">
		{{ csrf_field() }}
		<label for="NRP">NRP :</label><br>
        <input type="text" name="NRP" required="required"> <br/>
		<label for="NilaiAngka">NilaiAngka :</label><br>
        <input type="text" name="NilaiAngka" required="required"> <br/>
		<label for="SKS">SKS :</label><br>
        <input type="text" name="SKS" required="required"><br/>
        <div class="col">
            <div class="form-group">
                <div class="col-sm-6 submit-btn">
                    <input type="submit" class="btn btn-default" value="simpan">
                </div>
                <div class="col-sm-6 submit-btn">
                    <a href="/nilaikuliah" class="btn btn-default" role="button"> kembali</a>
                </div>
                <br><br>
            </div>
        </div>
	</form>

    @endsection
