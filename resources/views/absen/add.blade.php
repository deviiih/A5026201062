@extends('layout.bahagia')
@section('title', 'Edit Absensi')
@section('judulhalaman', 'Daftar Absensi Pegawai')

@section('konten')
<h1 style="text-align: center">Tambah Data Absen</h3>

<form action="/absen/store" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <br><br>
        <label for="idpegawaiadd" class="col-sm-2 control-label">ID Pegawai:</label>
        <select name="idpegawai" >
            @foreach($pegawai as $p)
            <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
        <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
            <input type='text' class="form-control" name="tanggal" required="required" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#dtpickerdemo').datetimepicker({
                format: 'YYYY-MM-DD hh:mm:ss',
                showTodayButton: false,
                locale : 'id',
                "defaultDate": new Date(),
            });
        });
    </script>

        Status <br />
        <input type="radio" id="html" name="status" value="I">
        <label for="html">Izin</label><br>
        <input type="radio" id="css" name="status" value="S" checked="checked">
        <label for="css">Sakit</label><br>
        <input type="radio" id="javascript" name="status" value="A">
        <label for="javascript">Alpha</label>
        <div class="row">
            <div class="col-sm-2">
                <p><input type="submit" class="btn btn-success" value="Simpan Data"></p>
            </div>
            <div class="col-sm-2">
                <a href="/absen" class="btn btn-primary btn-block" role="button" align ="center">Kembali</a>
            </div>
    </form>

    @endsection
