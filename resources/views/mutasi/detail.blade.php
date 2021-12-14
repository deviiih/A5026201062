@extends('layout.bahagia')
@section('title', 'Data Pegawai')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="jdl">DETAIL DATA MUTASI PEGAWAI</h1>
        </div>
        <br><br>

        @foreach($mutasi as $m)
        <div class="form-body">
            <div class="col">
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Nama :</label>
                            <div class='col-sm-8 input-group date' id='nama'>
                                <label class="control-label">{{ $m->pegawai_nama }}</label><br/>
                            </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-4 control-label">Departmen :</label>
                        <div class='col-sm-8 input-group date' id='departemen'>
                            <label class="control-label">{{ $m->Departemen }}</label> <br>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="umur" class="col-sm-4 control-label">Sub Departemen :</label>
                        <div class='col-sm-8 input-group date' id='umur'>
                            <label class="control-label">{{ $m->SubDepartemen }}</label><br>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="alamat" class="col-sm-4 control-label">Mulai Bertugas :</label>
                        <div class='col-sm-8 input-group date' id='alamat'>
                            <label class="control-label">{{ $m->MulaiBertugas }}</label><br>
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
