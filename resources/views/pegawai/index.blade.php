@extends('layout.bahagia')
@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Tabel Pegawai')

@section('konten')
<h1 style="text-align: center">Data Pegawai</h1>
	<br/>
    <div class="col" align="end" >
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
    </div>
    <br>
	<table class = "table" border="2">
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
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-default btn-sm" role="button">View Detail</a>
                |
				<a href="/pegawai/edit/ {{ $p->pegawai_id }}" class="btn btn-warning" role="button">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger" role="button">Hapus</a>
			</td>
		</tr>
        @endforeach
	</table>
    {{ $pegawai->links() }}
    <br>
    <a href="/pegawai/tambah" class="btn btn-primary btn-block" role="button" align ="center">+ Tambah Pegawai Baru</a>


    @endsection


