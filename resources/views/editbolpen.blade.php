@extends('template')

@section('content')
	<h3>Edit Bolpen</h3>

	<a href="/bolpen" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

    @foreach($bolpen as $b)
    <form action="/bolpen/update" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $b->id }}">

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="merk">
            Merk
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="text"
                   id="merk"
                   placeholder="Masukkan Merk Bolpen"
                   name="merkbolpen"
                   value="{{ $b->merkbolpen }}"
                   required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="harga">
            Harga
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="number"
                   id="harga"
                   placeholder="Masukkan Harga Bolpen"
                   name="hargabolpen"
                   value="{{ $b->hargabolpen }}"
                   required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2">
            Tersedia
        </label>
        <div class="col-sm-6">
            <div class="radio">
                <label>
                    <input type="radio" name="tersedia" value="1" {{ $b->tersedia == 1 ? 'checked' : '' }} required> Ya
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="tersedia" value="0" {{ $b->tersedia == 0 ? 'checked' : '' }}> Tidak
                </label>
            </div>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="berat">
            Berat
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="number"
                   id="berat"
                   placeholder="Masukkan Berat Bolpen"
                   name="berat"
                   value="{{ $b->berat }}"
                   required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </div>
    </div>
</form>
@endforeach
@endsection
