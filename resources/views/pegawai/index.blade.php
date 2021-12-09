@extends('layout.bahagia')
@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Tabel Pegawai')

@section('konten')
<h1 style="text-align: center">Data Pegawai</h1>
	<br/>

	<table border="2">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                 |
                 <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Delete</a>
			</td>
		</tr>
        @endforeach
	</table>

    <br>
    <a href="/pegawai/tambah" class="btn btn-primary btn-block" role="button" align ="center">+ Tambah Pegawai Baru</a>

    @endsection


