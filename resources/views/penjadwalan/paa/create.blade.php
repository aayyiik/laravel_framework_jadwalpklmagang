@extends('master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading"> Jadwal Baru</div>
                <div class="panel-body">

                        <form action="/penjadwalan/store" method="GET" >
                          @csrf

                          <div class="form-group">                           
                            <label for="id_dosen">PAA</label>
                            <select class="form-control" id="id_paa" name="id_paa" required>
                                <option value="">-- Pilih PAA --</option>
                                @foreach ($listPaa as $paa)
                                <option value="{{ $paa->id }}">{{ $paa->nama }} - NIP {{ $paa->nip }}</option>
                                @endforeach
                            </select>
                          </div>

                         <div class="form-group">                           
                            <label for="id_dosen">Dosen</label>
                            <select class="form-control" id="id_dosen" name="id_dosen" required>
                                <option value="">-- Pilih Dosen --</option>
                                @foreach ($listDosen as $dosen)
                                <option value="{{ $dosen->id }}">{{ $dosen->nama }} - NIP {{ $dosen->nip }}</option>
                                @endforeach
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="id_dosen">Mahasiswa</label>
                            <select class="form-control" id="id_mahasiswa" name="id_mahasiswa" required>
                              <option value="">-- Pilih Mahasiswa --</option>
                              @foreach ($listMahasiswa as $mh)
                              <option value="{{ $mh->id }}">{{ $mh->nama }} - NIM {{ $mh->nim }}</option>
                              @endforeach
                            </select>
                          </div>

                            <div class="form-group">
                              <label for="formGroupExampleInput">Tgl Sidang</label>
                              <input type="dateTime-local" class="form-control" name="tgl_sidang" id="formGroupExampleInput" placeholder="Example input">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Ruang</label>
                                <select class="form-control" name="ruang_sidang"id="exampleFormControlSelect1">
                                  <option>R-A01</option>
                                  <option>R-A02</option>
                                  <option>R-A03</option>
                                  <option>R-B01</option>
                                  <option>R-B02</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Semester</label>
                                <select class="form-control" name="semester" id="exampleFormControlSelect1">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                </select>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div> 
        </div>
    </div>
</div>
@endsection
