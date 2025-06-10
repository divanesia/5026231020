@extends('template')

@section('content')
	<h3>Data Bolpen</h3>

	<a href="/bolpen" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/bolpen/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merk">
                    Merk
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="merk"
                           placeholder="Masukkan Merk Bolpen"
                           name="merkbolpen" required="required">
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
                           name="hargabolpen" required="required">
                </div>
        </div>


        <div class="form-group has-success">
            <label class="control-label col-sm-2">Tersedia</label>
            <div class="col-sm-6">
                <div class="radio">
                    <label>
                        <input type="radio" name="tersedia" value="1" required> Ya
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="tersedia" value="0"> Tidak
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
                           name="berat" required="required">
                </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
    @endsection
