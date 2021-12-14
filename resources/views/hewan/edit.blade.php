@extends('layout.bahagia')

@section('title', 'Mengedit Data Hewan')
@section('judulhalaman', 'Edit Data Hewan')


@section('konten')
<h1 style="text-align: center">Edit Data Hewan</h1>
 @foreach($hewan as $h)
    <br><br>
 <form action="/hewan/update" method="post">
     {{ csrf_field() }}
     <input type="hidden" name="kodehewan" value="{{ $h->kodehewan }}">
     <div class="form-group">
         <label for="namahewanedit" class="col-sm-2 control-label">Nama Hewan:</label>
         <input type="text" name="namahewan" value="{{ $h->namahewan }}" required="required"> <br/>
         <label for="jumlah" class="col-sm-2 control-label">Jumlah Hewan:</label>
         <input type="number" name="jumlahhewan" value="{{ $h->jumlahhewan }}" required="required"> <br/>
     </div>
     <br>

             Status <br />
             <input type="radio" id="y" name="status" value="Y" @if ($h->Status === "Y" ) checked="checked" @endif>
             <label for="y">Iya (Tersedia)</label><br>
             <input type="radio" id="g" name="status" value="G" @if ($h->Status === "G" ) checked="checked" @endif>
             <label for="g">Tidak (Tidak Tersedia)</label><br>
     <div class="row">
        <div class="col-sm-2 vertical-center">
            <p><input type="submit" class="btn btn-success" value="Simpan Data" style="align-content: center"></p>
        </div>
        <div class="col-sm-2 vertical-center">
            <a href="/absen" class="btn btn-primary btn-danger" role="button" style="align-content: center">Kembali</a>
        </div>
    </form>
 @endforeach

@endsection

