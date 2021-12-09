@extends('layout.bahagia')
@section('title', 'Edit Pegawai')
@section('judulhalaman', 'Edit Pegawai')

@section('konten')
<h1 style="text-align: center">Edit Data Pegawai</h1>
<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <label for="fname">Nama :</label><br>
		<input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" style="width: 125%"> <br/><br>
		<label for="jabatan">Jabatan :</label><br>
        <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" style="width: 125%"> <br/><br>
		<label for="umur">Umur :</label><br>
        <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" style="width: 125%"> <br/><br>
		<label for="alamat">Alamat :</label><br>
        <textarea required="required" name="alamat" style="width: 125%">{{ $p->pegawai_alamat }}</textarea> <br/>
        <br>
        <div class="row">
            <div class="col-sm-2 vertical-center">
                <p><input type="submit" class="btn btn-success" value="Simpan Data" style="align-content: center"></p>
            </div>
            <div class="col-sm-2 vertical-center">
                <a href="/pegawai" class="btn btn-primary btn-danger" role="button" style="align-content: center">Kembali</a>
            </div>
	</form>
	@endforeach

    @endsection
