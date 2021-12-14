@extends('layout.bahagia')
@section('title', 'Data Pegawai')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="jdl">DETAIL DATA PEGAWAI</h1>
        </div>
        <br><br>

        @foreach($pegawai as $p)
        <div class="form-body">
            <div class="col">
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Nama :</label>
                            <div class='col-sm-8 input-group date' id='nama'>
                                <label class="control-label">{{ $p->pegawai_nama }}</label><br/>
                            </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-4 control-label">Jabatan :</label>
                        <div class='col-sm-8 input-group date' id='jabatan'>
                            <label class="control-label">{{ $p->pegawai_jabatan }}</label> <br>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="umur" class="col-sm-4 control-label">Umur :</label>
                        <div class='col-sm-8 input-group date' id='umur'>
                            <label class="control-label">{{ $p->pegawai_umur }}</label><br>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="alamat" class="col-sm-4 control-label">Alamat :</label>
                        <div class='col-sm-8 input-group date' id='alamat'>
                            <label class="control-label">{{ $p->pegawai_alamat }}</label><br>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col">
                <div class="form-group">
                    <div class="col-sm-6 submit-btn">
                        <a href="/pegawai" class="btn btn-primary btn-block" role="button" align ="center">Kembali</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
