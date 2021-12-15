@extends('layout.bahagia')
@section('title', 'Tabel nilaikuliah')
@section('judulhalaman', 'Daftar Nilai Mahasiswa')

@section('konten')
	<h3 style="text-align: center">Data Nilai Mahasiswa</h3>
	<br/>
	<table border="3" style="align-content: center">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $k)
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->NRP }}</td>
            <td>{{ $k->NilaiAngka }}</td>
			<td>{{ $k->SKS }}</td>
            <td>
                <?php
                    if($n->NilaiAngka <=40){
                        echo "D";
                    } elseif ($k->NilaiAngka >=41 && $k->NilaiAngka <=60) {
                        echo "C";
                    } elseif ($k->NilaiAngka >=61 && $k->NilaiAngka <=80) {
                        echo "B";
                    } else{
                        echo "A";
                    }
                    ?>
            </td>
            <td>{{ $k->SKS * $k->NilaiAngka }}</td>
		</tr>
		@endforeach
	</table>

    <p>Konversi dari nilai Angka ke Huruf adalah : </p>
    <table border="3" style="align-content: center">
		<tr>
			<th>Nilai Angka</th>
			<th>Nilai Huruf</th>
		</tr>
		<tr>
			<td><=40</td>
			<td>D</td>
		</tr>
        <tr>
            <td> 41 <= NA <= 60 </td>
            <td> C </td>
        </tr>
        <tr>
            <td> 61 <= NA <= 80 </td>
            <td> B </td>
            <tr>
        <tr>
            <td> => 81 </td>
            <td> A </td>
            <tr>
	</table>

    <br><a href="/nilaikuliah/tambah" class="btn btn-primary btn-block" role="button" align ="center"> + Tambah Nilai Kuliah Baru</a>
    @endsection


