@extends('layout.bahagia')
@section('title', 'Edit Hewan')
@section('judulhalaman', 'Tambah Hewan')

@section('konten')
<h1 style="text-align: center">Tambah Data Hewan</h1>
	<br/>

	<form action="/hewan/store" method="post">
		{{ csrf_field() }}
        <label for="fname">Nama Hewan:</label><br>
		<input type="text" name="namahewan" required="required"> <br/>
		<label for="umur">Jumlah Hewan :</label><br>
        <input type="number" name="jumlahhewan" required="required"> <br/>
        <label for="tersedia">Status :</label><br>
        <input type="radio" id="y" name="tersedia" value="Y" >
        <label for="y">Y</label><br>
        <input type="radio" id="g" name="tersedia" value="G">
        <label for="g">G</label><br>

        <div class="row">
            <div class="col-sm-2">
                <p><input type="submit" class="btn btn-success" value="Simpan Data"></p>
            </div>
            <div class="col-sm-2">
                <a href="/hewan" class="btn btn-primary btn-block" role="button" align ="center">Kembali</a>
            </div>
	</form>
    <br>
    <br>
    <div>

    <p>
        <br>
        Keterangan Status: <br>
        Y : Iya (Tersedia) <br>
        G : Tidak (Tidak Tersedia) <br>
    </p>
    </div>
    @endsection
