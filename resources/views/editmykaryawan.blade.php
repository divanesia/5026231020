@extends('template')

@section('content')
	<h3>Edit Bolpen</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

    @foreach($mykaryawan as $ka)
    <form action="/eas/update" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="kodepegawai" value="{{ $ka->kodepegawai }}">

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="namalengkap">
            Nama Lengkap
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="text"
                   id="merk"
                   placeholder="Masukkan nama lengkpa mu"
                   name="namalengkap"
                   value="{{ $ka->namalengkap }}"
                   required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="divisi">
            Divisi
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="text"
                   id="divisi"
                   placeholder="Masukkan nama lengkpa mu"
                   name="divisi"
                   value="{{ $ka->divisi }}"
                   required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="departemen">
            Departemen
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="text"
                   id="departemen"
                   placeholder="Masukkan departemen mu"
                   name="departemen"
                   value="{{ $ka->departemen }}"
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
