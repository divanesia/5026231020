@extends('template')

@section('content')
    <h3>MyKaryawan</h3>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th class="text-center">Nama Lengkap</th>
            <th class="text-center">Divisi</th>
            <th class="text-center">Departemen</th>
            <th class="text-center">Action</th>


        </tr>
        @foreach ($mykaryawan as $ka)
            <tr>
                <td>{{ $ka->kodepegawai }}</td>
                <td class="text-center">{{ Str::title($ka->namalengkap) }}</td>
                <td class="text-center">{{ $ka->divisi }}</td>
                <td class="text-center">{{ $ka->departemen }}</td>
                <td class="text-center">
                    <a href="{{ url('/eas/view/' . $ka->kodepegawai) }}" class="btn btn-info btn-sm">View</a>
                    <a href="/eas/edit/{{ $ka->kodepegawai }}" class="btn btn-success">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center mt-3">
    @endsection
