    @extends('layout.bahagia')
    @section('title', 'Tabel Absensi')
    @section('judulhalaman', 'Daftar Absensi Pegawai')

    @section('konten')
    <h1 style="text-align: center">Data Absen</h1>
     <br/>
     <div class="col" align="end" >
        <form action="/mutasi/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form>
        </div>
        <br>
     <table class="table table-bordered">
         <tr>

             <th>Nama Pegawai</th>
             <th>Tanggal</th>
             <th>Status</th>
             <th>Opsi</th>
         </tr>
         @foreach($absen as $a)
         <tr>

             <td>{{ $a->pegawai_nama }}</td>
             <td>{{ $a->Tanggal }}</td>
             <td>{{ $a->Status }}</td>
             <td>
                <a href="/absen/detail/{{ $a->ID }}" class="btn btn-default btn-sm" role="button">View Detail</a>
                |
                 <a class="btn btn-warning btn-sm" href="/absen/edit/{{ $a->ID }}">Edit</a>
                 |
                 <a class="btn btn-danger btn-sm" href="/absen/hapus/{{ $a->ID }}">Delete</a>
             </td>
         </tr>
         @endforeach
     </table>
     {{ $absen->links() }}
     <a href="/absen/add" class="btn btn-primary btn-block" role="button" align ="center">+ Tambah Absensi</a>
     <br>
     <p>
         Keterangan Status: <br>
         I : Izin <br>
         S : Sakit <br>
         A : Alpha <br>
     </p>


 @endsection

