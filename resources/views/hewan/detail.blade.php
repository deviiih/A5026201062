@extends('layout.bahagia')
@section('title', 'Data Hewan')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="jdl">DETAIL DATA HEWAN</h1>
        </div>
        <br><br>

        @foreach($hewan as $h)
        <div class="form-body">
            <div class="col">
                <div class="form-group">
                    <label for="kodehewan" class="col-sm-4 control-label">Kode Hewan :</label>
                    <div class='col-sm-8 input-group date' id='alamat'>
                        <label class="control-label">{{ $h->kodehewan }}</label><br>
                    </div>
                </div>
        </div>
            <div class="col">
                    <div class="form-group">
                        <label for="namahewan" class="col-sm-4 control-label">Nama Hewan :</label>
                            <div class='col-sm-8 input-group date' id='namahewan'>
                                <label class="control-label">{{ $h->namahewan }}</label><br/>
                            </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="jumlahhewan" class="col-sm-4 control-label">Jumlah Hewan :</label>
                        <div class='col-sm-8 input-group date' id='jumlahewan'>
                            <label class="control-label">{{ $h->jumlahhewan }}</label> <br>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="tersedia" class="col-sm-4 control-label">Status :</label>
                        <div class='col-sm-8 input-group date' id='tersedia'>
                            <label class="control-label">{{ $h->tersedia }}</label><br>
                        </div>
                    </div>
            </div>

            <br>
            <div class="col">
                <div class="form-group">
                    <div class="col-sm-6 submit-btn">
                        <a href="/hewan" class="btn btn-primary btn-block" role="button" align ="center">Kembali</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <p>
        Keterangan Status: <br>
        Y : Iya (Tersedia) <br>
        G : Tidak (Tidak Tersedia) <br>
    </p>
@endsection
