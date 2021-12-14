@extends('layout.bahagia')
@section('title', 'Data Hewan')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="jdl">EDIT DATA HEWAN</h1>
        </div>
        <br><br>

	@foreach($hewan as $h)
	<form action="/hewan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $h->kodehewan }}"> <br/>
        <div class="form-body">
            <div class="col">
                <div class="form-group">
                    <label for="namahewan" class="col-sm-3 control-label">Nama Hewan</label>
                    <label for="namahewan" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group date' id='namahewan'>
                        <input type="text" class="form-control" name="namahewan" required="required" value="{{ $h->namahewan }}"> <br/>
                        </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="jumlahhewan" class="col-sm-3 control-label">Jumlah Hewan</label>
                    <label for="jumlahhewan" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group date' id='jumlahhewan'>
                        <input type="number" class="form-control" name="jumlahhewan" required="required" value="{{ $h->jumlahhewan }}"> <br/>
                        </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="tersedia" class="col-sm-3 control-label">Status</label>
                    <label for="tersedia" class="col-sm-1 control-label">:</label>
                    <div class='col-sm-8 input-group date' id='radiopicker'>
                        <input type="radio" id="y" name="tersedia" value="Y" @if($h->tersedia==='Y') checked="checked" @endif>
                        <label for="h">TERSEDIA</label><br>
                        <input type="radio"  id="g" name="tersedia" value="G" @if($h->tersedia==='G') checked="checked" @endif>
                        <label for="g">TIDAK TERSEDIA</label><br>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="col-sm-6 submit-btn">
                        <input type="submit" class="btn btn-default" value="Simpan Data">
                    </div>
                    <div class="col-sm-6 submit-btn">
                        <a href="/hewan" class="btn btn-default" role="button"> Kembali</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
	</form>

	@endforeach
</div>
@endsection
