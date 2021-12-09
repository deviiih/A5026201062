@extends('layout.bahagia')
@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Tabel Pegawai')

@section('konten')

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
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
    <a href="/absen/add" class="btn btn-primary btn-block" role="button" align ="center">+ Tambah Absensi</a>

    @endsection


