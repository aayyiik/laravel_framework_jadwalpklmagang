@extends('master')


@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>Jadwal</h1>
    </div>
    <div class="col-md-6">
        <a href="/penjadwalan/create" class="btn btn-dark float-right">
            TAMBAH
        </a>
    </div>
    <br>
    <br>

<table class="table table-dark">
    <tr>
        <th>ID </th>
        <th>Dosen</th>
        <th>Mahasiswa</th>
        <th>tgl sidang</th>
        <th>ruang sidang</th>
        <th>semester</th>
    </tr>
    @foreach ($jadwal as $item)
    <tbody>
        <tr>
            <td>{{ $item->paa->nip }}</td>
            <td>{{ $item->dosen->nama }}</td>
            <td>{{ $item->mahasiswa->nama }}</td>
            <td>{{ $item->tgl_sidang }}</td>
            <td>{{ $item->ruang_sidang }}</td>
            <td>{{ $item->semester }}</td>
        </tr>
    </tbody>

  @endforeach
</table>

@endsection

