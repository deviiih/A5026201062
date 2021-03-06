@extends('layout.bahagia')
@section('title', 'Tabel Mutasi')
@section('judulhalaman', 'Daftar Mutasi Pegawai')

@section('konten')
	<h3 style="text-align: center">Data Mutasi</h3>
	<br/>
    <div class="col" align="end" >
        <form action="/pegawai/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form>
        </div>
        <br>
	<table border="3" style="align-content: center">
		<tr>
			<th>IDPegawai</th>
			<th>Departemen</th>
			<th>SubDepartemen</th>
			<th>MulaiBertugas</th>
            <th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td>{{ $m->pegawai_nama }}</td>
			<td>{{ $m->Departemen }}</td>
            <td>{{ $m->SubDepartemen }}</td>
			<td>{{ $m->MulaiBertugas }}</td>
			<td>
                <a href="/mutasi/detail/{{ $m->ID }}" class="btn btn-default btn-sm" role="button">View Detail</a>
                |
				<a class="btn btn-warning btn-sm" href="/mutasi/edit/{{ $m->ID }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/mutasi/hapus/{{ $m->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $mutasi->links() }}
    <br><a href="/mutasi/tambah" class="btn btn-primary btn-block" role="button" align ="center"> + Tambah Mutasi Baru</a>
    @endsection


