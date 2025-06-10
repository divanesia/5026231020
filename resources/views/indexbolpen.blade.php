@extends('template')

@section('content')
	<h3>Data Bolpen</h3>

	<a href="/bolpen/tambah" class="btn btn-primary"> + Tambah Bolpen Baru</a>

    <br>
    <br>
	<p>Cari Data Bolpen :</p>
	<form action="/bolpen/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Bolpen...">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
    <br>

	<table class="table table-striped table-hover">
		<tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($bolpen as $b)
		<tr>
			<td>{{ $b->merkbolpen }}</td>
            <td>{{ $b->hargabolpen }}</td>
            <td>{{ $b->tersedia }}</td>
            <td>{{ $b->berat }}</td>

			<td>
				<a href="/bolpen/edit/{{ $b->id }}" class="btn btn-success">Edit</a>
				<a href="/bolpen/hapus/{{ $b->id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $bolpen->links() }}
@endsection
