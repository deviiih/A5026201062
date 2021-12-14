@extends('layout.bahagia')
@section('title', 'Tabel Hewan')
@section('judulhalaman', 'Daftar Hewan')

@section('konten')
<h1 style="text-align: center">Data Hewan</h1>
     <br/>
     <div class="col" align="end" >
        <form action="/hewan/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form>
        </div>
        <br>
     <table class="table table-bordered">
         <tr>

             <th>Nama Hewan</th>
             <th>Status</th>
         </tr>
         @foreach($hewan as $h)
         <tr>

             <td>{{ $h->namahewan }}</td>
             <td>{{ $h->tersedia }}</td>
             <td>
                <a href="/absen/detail/{{ $h->kodehewan }}" class="btn btn-default btn-sm" role="button">View Detail</a>
                |
                 <a class="btn btn-warning btn-sm" href="/hewan/edit/{{ $h->kodehewan }}">Edit</a>
                 |
                 <a class="btn btn-danger btn-sm" href="/hewan/hapus/{{ $h->kodehewan }}">Delete</a>
             </td>
         </tr>
         @endforeach
     </table>
     {{ $hewan->links() }}
     <a href="/absen/add" class="btn btn-primary btn-block" role="button" align ="center">+ Tambah Hewan</a>
     <br>
     @endsection
