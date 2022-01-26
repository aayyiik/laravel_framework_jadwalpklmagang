@extends('master')


@section('content')

        <h1>Jadwal</h1>
        <h1>Login Sebagai:
           {{ Auth::user()->nama }}</h1>
    
    <br>
    <br>

<table class="table table-dark">
    <tr>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Dosen</th>
         <th>tgl sidang</th>
        <th>ruang sidang</th>
        <th>semester</th>
    </tr>
    @foreach ($jadwal as $item)
    <tbody>
        <tr>
            <td>{{ $item->mahasiswa->nim }}</td>
            <td>{{ $item->mahasiswa->nama }}</td>
            <td>{{ $item->dosen->nama }}</td>
            <td>{{ $item->tgl_sidang }}</td>
            <td>{{ $item->ruang_sidang }}</td>
            <td>{{ $item->semester }}</td>

        </tr>
    </tbody>

  @endforeach
</table>

@endsection

